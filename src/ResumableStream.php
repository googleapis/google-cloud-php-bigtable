<?php
/**
 * Copyright 2019, Google LLC All rights reserved.
 *
 * Licensed under the Apache License, Version 2.0 (the "License");
 * you may not use this file except in compliance with the License.
 * You may obtain a copy of the License at
 *
 *     http://www.apache.org/licenses/LICENSE-2.0
 *
 * Unless required by applicable law or agreed to in writing, software
 * distributed under the License is distributed on an "AS IS" BASIS,
 * WITHOUT WARRANTIES OR CONDITIONS OF ANY KIND, either express or implied.
 * See the License for the specific language governing permissions and
 * limitations under the License.
 */

namespace Google\Cloud\Bigtable;

use Google\ApiCore\ApiException;
use Google\Cloud\Core\ExponentialBackoff;
use Google\Rpc\Code;
use Psr\Log\LoggerInterface;

/**
 * User stream which handles failure from upstream, retries if necessary and
 * provides single retrying user stream.
 */
class ResumableStream implements \IteratorAggregate
{
    const DEFAULT_MAX_RETRIES = 3;

    /**
     * @var array
     */
    public static $retryableStatusCodes = [
        Code::DEADLINE_EXCEEDED => Code::DEADLINE_EXCEEDED,
        Code::ABORTED => Code::ABORTED,
        Code::UNAVAILABLE => Code::UNAVAILABLE
    ];

    /**
     * @var int
     */
    private $retries;

    /**
     * @var callable
     */
    private $apiFunction;

    /**
     * @var callable
     */
    private $argumentFunction;

    /**
     * @var callable
     */
    private $retryFunction;

    /**
     * @var LoggerInterface
     */
    private $logger;

    /**
     * @var callable
     */
    private $delayFunction;

    /**
     * Constructs a resumable stream.
     *
     * @param callable $apiFunction Function to execute to get server stream. Function signature
     *        should match: `function (...) : Google\ApiCore\ServerStream`.
     * @param callable $argumentFunction Function which returns the argument to be used while
     *        calling `$apiFunction`.
     * @param callable $retryFunction Function which determines whether to retry or not.
     * @param int $retries [optional] Number of times to retry. **Defaults to** `3`.
     */
    public function __construct(
        callable $apiFunction,
        callable $argumentFunction,
        callable $retryFunction,
        $retries = self::DEFAULT_MAX_RETRIES,
        LoggerInterface $logger = null
    ) {
        $this->retries = $retries ?: self::DEFAULT_MAX_RETRIES;
        $this->apiFunction = $apiFunction;
        $this->argumentFunction = $argumentFunction;
        $this->retryFunction = $retryFunction;
        $this->logger = $logger;

        $this->delayFunction = function (int $attempt) {
            // Values here are taken from the Java Bigtable client, and are
            // different than those set by default in the readRows configuration
            // @see https://github.com/googleapis/java-bigtable/blob/c618969216c90c42dee6ee48db81e90af4fb102b/google-cloud-bigtable/src/main/java/com/google/cloud/bigtable/data/v2/stub/EnhancedBigtableStubSettings.java#L162-L164
            $initialDelayMillis = 10;
            $initialDelayMultiplier = 2;
            $maxDelayMillis = 60000;

            $delayMultiplier = $initialDelayMultiplier ** $attempt;
            $delayMs = min($initialDelayMillis * $delayMultiplier, $maxDelayMillis);
            $actualDelayMs = mt_rand(0, $delayMs); // add jitter
            $delay = 1000 * $actualDelayMs; // convert ms to µs

            usleep((int) $delay);
        };
    }

    /**
     * Starts executing the call and reading elements from server stream.
     *
     * @return \Generator
     * @throws ApiException
     */
    public function readAll()
    {
        // Reset $currentAttempts on successful row read, but keep total attempts for the header.
        $currentAttempt = $totalAttempt = 0;
        do {
            $ex = null;
            $args = ($this->argumentFunction)();

            $completed = ($args[1]['requestCompleted'] ?? false) === true;
            if ($completed !== true) {
                $optionalArgs = array_pop($args);
                $optionalArgs['retrySettings'] = ['retriesEnabled' => false]; // disable retries in GAPIC layer
                // Send in "bigtable-attempt" header on retry request
                if ($totalAttempt > 0) {
                    $headers = $optionalArgs['headers'] ?? [];
                    $headers['bigtable-attempt'] = [(string) $totalAttempt];
                    $optionalArgs['headers'] = $headers;
                    ($this->delayFunction)($currentAttempt);
                }
                $args[] = $optionalArgs;

                $stream = call_user_func_array($this->apiFunction, $args);

                try {
                    foreach ($stream->readAll() as $item) {
                        yield $item;
                        $currentAttempt = 0; // reset delay and attempt on successful read.
                    }
                } catch (\Exception $ex) {
                    if ($this->logger) {
                        $this->logger->error($ex->getMessage());
                    }
                }
                $totalAttempt++;
                $currentAttempt++;
            }
        } while ((!$this->retryFunction || ($this->retryFunction)($ex)) && $currentAttempt <= $this->retries);
        if ($ex !== null) {
            throw $ex;
        }
    }

    /**
     * @access private
     * @return \Generator
     * @throws ApiException Thrown in the case of a malformed response.
     */
    #[\ReturnTypeWillChange]
    public function getIterator()
    {
        return $this->readAll();
    }

    /**
     * Checks if code is retryable or not.
     *
     * @param int $code Code to check.
     * @return bool
     */
    public static function isRetryable($code)
    {
        return isset(self::$retryableStatusCodes[$code]);
    }

    private function createExponentialBackoff()
    {
        return new ExponentialBackoff(
            $this->retries,
            function ($ex) {
                return self::isRetryable($ex->getCode());
            }
        );
    }
}
