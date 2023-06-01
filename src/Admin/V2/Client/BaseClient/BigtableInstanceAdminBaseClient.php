<?php
/*
 * Copyright 2023 Google LLC
 *
 * Licensed under the Apache License, Version 2.0 (the "License");
 * you may not use this file except in compliance with the License.
 * You may obtain a copy of the License at
 *
 *     https://www.apache.org/licenses/LICENSE-2.0
 *
 * Unless required by applicable law or agreed to in writing, software
 * distributed under the License is distributed on an "AS IS" BASIS,
 * WITHOUT WARRANTIES OR CONDITIONS OF ANY KIND, either express or implied.
 * See the License for the specific language governing permissions and
 * limitations under the License.
 */

/*
 * GENERATED CODE WARNING
 * Generated by gapic-generator-php from the file
 * https://github.com/googleapis/googleapis/blob/master/google/bigtable/admin/v2/bigtable_instance_admin.proto
 * Updates to the above are reflected here through a refresh process.
 */

namespace Google\Cloud\Bigtable\Admin\V2\Client\BaseClient;

use Google\ApiCore\ApiException;
use Google\ApiCore\CredentialsWrapper;
use Google\ApiCore\GapicClientTrait;
use Google\ApiCore\LongRunning\OperationsClient;
use Google\ApiCore\OperationResponse;
use Google\ApiCore\PagedListResponse;
use Google\ApiCore\ResourceHelperTrait;
use Google\ApiCore\RetrySettings;
use Google\ApiCore\Transport\TransportInterface;
use Google\ApiCore\ValidationException;
use Google\Auth\FetchAuthTokenInterface;
use Google\Cloud\Bigtable\Admin\V2\AppProfile;
use Google\Cloud\Bigtable\Admin\V2\Cluster;
use Google\Cloud\Bigtable\Admin\V2\CreateAppProfileRequest;
use Google\Cloud\Bigtable\Admin\V2\CreateClusterRequest;
use Google\Cloud\Bigtable\Admin\V2\CreateInstanceRequest;
use Google\Cloud\Bigtable\Admin\V2\DeleteAppProfileRequest;
use Google\Cloud\Bigtable\Admin\V2\DeleteClusterRequest;
use Google\Cloud\Bigtable\Admin\V2\DeleteInstanceRequest;
use Google\Cloud\Bigtable\Admin\V2\GetAppProfileRequest;
use Google\Cloud\Bigtable\Admin\V2\GetClusterRequest;
use Google\Cloud\Bigtable\Admin\V2\GetInstanceRequest;
use Google\Cloud\Bigtable\Admin\V2\Instance;
use Google\Cloud\Bigtable\Admin\V2\ListAppProfilesRequest;
use Google\Cloud\Bigtable\Admin\V2\ListClustersRequest;
use Google\Cloud\Bigtable\Admin\V2\ListClustersResponse;
use Google\Cloud\Bigtable\Admin\V2\ListHotTabletsRequest;
use Google\Cloud\Bigtable\Admin\V2\ListInstancesRequest;
use Google\Cloud\Bigtable\Admin\V2\ListInstancesResponse;
use Google\Cloud\Bigtable\Admin\V2\PartialUpdateClusterRequest;
use Google\Cloud\Bigtable\Admin\V2\PartialUpdateInstanceRequest;
use Google\Cloud\Bigtable\Admin\V2\UpdateAppProfileRequest;
use Google\Cloud\Iam\V1\GetIamPolicyRequest;
use Google\Cloud\Iam\V1\Policy;
use Google\Cloud\Iam\V1\SetIamPolicyRequest;
use Google\Cloud\Iam\V1\TestIamPermissionsRequest;
use Google\Cloud\Iam\V1\TestIamPermissionsResponse;
use Google\LongRunning\Operation;
use GuzzleHttp\Promise\PromiseInterface;

/**
 * Service Description: Service for creating, configuring, and deleting Cloud Bigtable Instances and
 * Clusters. Provides access to the Instance and Cluster schemas only, not the
 * tables' metadata or data stored in those tables.
 *
 * This class provides the ability to make remote calls to the backing service through method
 * calls that map to API methods.
 *
 * Many parameters require resource names to be formatted in a particular way. To
 * assist with these names, this class includes a format method for each type of
 * name, and additionally a parseName method to extract the individual identifiers
 * contained within formatted names that are returned by the API.
 *
 * This class is currently experimental and may be subject to changes.
 *
 * @experimental
 *
 * @internal
 *
 * @method PromiseInterface createAppProfileAsync(CreateAppProfileRequest $request, array $optionalArgs = [])
 * @method PromiseInterface createClusterAsync(CreateClusterRequest $request, array $optionalArgs = [])
 * @method PromiseInterface createInstanceAsync(CreateInstanceRequest $request, array $optionalArgs = [])
 * @method PromiseInterface deleteAppProfileAsync(DeleteAppProfileRequest $request, array $optionalArgs = [])
 * @method PromiseInterface deleteClusterAsync(DeleteClusterRequest $request, array $optionalArgs = [])
 * @method PromiseInterface deleteInstanceAsync(DeleteInstanceRequest $request, array $optionalArgs = [])
 * @method PromiseInterface getAppProfileAsync(GetAppProfileRequest $request, array $optionalArgs = [])
 * @method PromiseInterface getClusterAsync(GetClusterRequest $request, array $optionalArgs = [])
 * @method PromiseInterface getIamPolicyAsync(GetIamPolicyRequest $request, array $optionalArgs = [])
 * @method PromiseInterface getInstanceAsync(GetInstanceRequest $request, array $optionalArgs = [])
 * @method PromiseInterface listAppProfilesAsync(ListAppProfilesRequest $request, array $optionalArgs = [])
 * @method PromiseInterface listClustersAsync(ListClustersRequest $request, array $optionalArgs = [])
 * @method PromiseInterface listHotTabletsAsync(ListHotTabletsRequest $request, array $optionalArgs = [])
 * @method PromiseInterface listInstancesAsync(ListInstancesRequest $request, array $optionalArgs = [])
 * @method PromiseInterface partialUpdateClusterAsync(PartialUpdateClusterRequest $request, array $optionalArgs = [])
 * @method PromiseInterface partialUpdateInstanceAsync(PartialUpdateInstanceRequest $request, array $optionalArgs = [])
 * @method PromiseInterface setIamPolicyAsync(SetIamPolicyRequest $request, array $optionalArgs = [])
 * @method PromiseInterface testIamPermissionsAsync(TestIamPermissionsRequest $request, array $optionalArgs = [])
 * @method PromiseInterface updateAppProfileAsync(UpdateAppProfileRequest $request, array $optionalArgs = [])
 * @method PromiseInterface updateClusterAsync(Cluster $request, array $optionalArgs = [])
 * @method PromiseInterface updateInstanceAsync(Instance $request, array $optionalArgs = [])
 */
abstract class BigtableInstanceAdminBaseClient
{
    use GapicClientTrait;
    use ResourceHelperTrait;

    /** The name of the service. */
    private const SERVICE_NAME = 'google.bigtable.admin.v2.BigtableInstanceAdmin';

    /** The default address of the service. */
    private const SERVICE_ADDRESS = 'bigtableadmin.googleapis.com';

    /** The default port of the service. */
    private const DEFAULT_SERVICE_PORT = 443;

    /** The name of the code generator, to be included in the agent header. */
    private const CODEGEN_NAME = 'gapic';

    /** The default scopes required by the service. */
    public static $serviceScopes = [
        'https://www.googleapis.com/auth/bigtable.admin',
        'https://www.googleapis.com/auth/bigtable.admin.cluster',
        'https://www.googleapis.com/auth/bigtable.admin.instance',
        'https://www.googleapis.com/auth/cloud-bigtable.admin',
        'https://www.googleapis.com/auth/cloud-bigtable.admin.cluster',
        'https://www.googleapis.com/auth/cloud-platform',
        'https://www.googleapis.com/auth/cloud-platform.read-only',
    ];

    private $operationsClient;

    private static function getClientDefaults()
    {
        return [
            'serviceName' => self::SERVICE_NAME,
            'apiEndpoint' => self::SERVICE_ADDRESS . ':' . self::DEFAULT_SERVICE_PORT,
            'clientConfig' => __DIR__ . '/../../resources/bigtable_instance_admin_client_config.json',
            'descriptorsConfigPath' => __DIR__ . '/../../resources/bigtable_instance_admin_descriptor_config.php',
            'gcpApiConfigPath' => __DIR__ . '/../../resources/bigtable_instance_admin_grpc_config.json',
            'credentialsConfig' => [
                'defaultScopes' => self::$serviceScopes,
            ],
            'transportConfig' => [
                'rest' => [
                    'restClientConfigPath' => __DIR__ . '/../../resources/bigtable_instance_admin_rest_client_config.php',
                ],
            ],
        ];
    }

    /**
     * Return an OperationsClient object with the same endpoint as $this.
     *
     * @return OperationsClient
     */
    public function getOperationsClient()
    {
        return $this->operationsClient;
    }

    /**
     * Resume an existing long running operation that was previously started by a long
     * running API method. If $methodName is not provided, or does not match a long
     * running API method, then the operation can still be resumed, but the
     * OperationResponse object will not deserialize the final response.
     *
     * @param string $operationName The name of the long running operation
     * @param string $methodName    The name of the method used to start the operation
     *
     * @return OperationResponse
     */
    public function resumeOperation($operationName, $methodName = null)
    {
        $options = isset($this->descriptors[$methodName]['longRunning']) ? $this->descriptors[$methodName]['longRunning'] : [];
        $operation = new OperationResponse($operationName, $this->getOperationsClient(), $options);
        $operation->reload();
        return $operation;
    }

    /**
     * Formats a string containing the fully-qualified path to represent a app_profile
     * resource.
     *
     * @param string $project
     * @param string $instance
     * @param string $appProfile
     *
     * @return string The formatted app_profile resource.
     */
    public static function appProfileName(string $project, string $instance, string $appProfile): string
    {
        return self::getPathTemplate('appProfile')->render([
            'project' => $project,
            'instance' => $instance,
            'app_profile' => $appProfile,
        ]);
    }

    /**
     * Formats a string containing the fully-qualified path to represent a cluster
     * resource.
     *
     * @param string $project
     * @param string $instance
     * @param string $cluster
     *
     * @return string The formatted cluster resource.
     */
    public static function clusterName(string $project, string $instance, string $cluster): string
    {
        return self::getPathTemplate('cluster')->render([
            'project' => $project,
            'instance' => $instance,
            'cluster' => $cluster,
        ]);
    }

    /**
     * Formats a string containing the fully-qualified path to represent a crypto_key
     * resource.
     *
     * @param string $project
     * @param string $location
     * @param string $keyRing
     * @param string $cryptoKey
     *
     * @return string The formatted crypto_key resource.
     */
    public static function cryptoKeyName(string $project, string $location, string $keyRing, string $cryptoKey): string
    {
        return self::getPathTemplate('cryptoKey')->render([
            'project' => $project,
            'location' => $location,
            'key_ring' => $keyRing,
            'crypto_key' => $cryptoKey,
        ]);
    }

    /**
     * Formats a string containing the fully-qualified path to represent a instance
     * resource.
     *
     * @param string $project
     * @param string $instance
     *
     * @return string The formatted instance resource.
     */
    public static function instanceName(string $project, string $instance): string
    {
        return self::getPathTemplate('instance')->render([
            'project' => $project,
            'instance' => $instance,
        ]);
    }

    /**
     * Formats a string containing the fully-qualified path to represent a location
     * resource.
     *
     * @param string $project
     * @param string $location
     *
     * @return string The formatted location resource.
     */
    public static function locationName(string $project, string $location): string
    {
        return self::getPathTemplate('location')->render([
            'project' => $project,
            'location' => $location,
        ]);
    }

    /**
     * Formats a string containing the fully-qualified path to represent a project
     * resource.
     *
     * @param string $project
     *
     * @return string The formatted project resource.
     */
    public static function projectName(string $project): string
    {
        return self::getPathTemplate('project')->render([
            'project' => $project,
        ]);
    }

    /**
     * Parses a formatted name string and returns an associative array of the components in the name.
     * The following name formats are supported:
     * Template: Pattern
     * - appProfile: projects/{project}/instances/{instance}/appProfiles/{app_profile}
     * - cluster: projects/{project}/instances/{instance}/clusters/{cluster}
     * - cryptoKey: projects/{project}/locations/{location}/keyRings/{key_ring}/cryptoKeys/{crypto_key}
     * - instance: projects/{project}/instances/{instance}
     * - location: projects/{project}/locations/{location}
     * - project: projects/{project}
     *
     * The optional $template argument can be supplied to specify a particular pattern,
     * and must match one of the templates listed above. If no $template argument is
     * provided, or if the $template argument does not match one of the templates
     * listed, then parseName will check each of the supported templates, and return
     * the first match.
     *
     * @param string $formattedName The formatted name string
     * @param string $template      Optional name of template to match
     *
     * @return array An associative array from name component IDs to component values.
     *
     * @throws ValidationException If $formattedName could not be matched.
     */
    public static function parseName(string $formattedName, string $template = null): array
    {
        return self::parseFormattedName($formattedName, $template);
    }

    /**
     * Constructor.
     *
     * @param array $options {
     *     Optional. Options for configuring the service API wrapper.
     *
     *     @type string $apiEndpoint
     *           The address of the API remote host. May optionally include the port, formatted
     *           as "<uri>:<port>". Default 'bigtableadmin.googleapis.com:443'.
     *     @type string|array|FetchAuthTokenInterface|CredentialsWrapper $credentials
     *           The credentials to be used by the client to authorize API calls. This option
     *           accepts either a path to a credentials file, or a decoded credentials file as a
     *           PHP array.
     *           *Advanced usage*: In addition, this option can also accept a pre-constructed
     *           {@see \Google\Auth\FetchAuthTokenInterface} object or
     *           {@see \Google\ApiCore\CredentialsWrapper} object. Note that when one of these
     *           objects are provided, any settings in $credentialsConfig will be ignored.
     *     @type array $credentialsConfig
     *           Options used to configure credentials, including auth token caching, for the
     *           client. For a full list of supporting configuration options, see
     *           {@see \Google\ApiCore\CredentialsWrapper::build()} .
     *     @type bool $disableRetries
     *           Determines whether or not retries defined by the client configuration should be
     *           disabled. Defaults to `false`.
     *     @type string|array $clientConfig
     *           Client method configuration, including retry settings. This option can be either
     *           a path to a JSON file, or a PHP array containing the decoded JSON data. By
     *           default this settings points to the default client config file, which is
     *           provided in the resources folder.
     *     @type string|TransportInterface $transport
     *           The transport used for executing network requests. May be either the string
     *           `rest` or `grpc`. Defaults to `grpc` if gRPC support is detected on the system.
     *           *Advanced usage*: Additionally, it is possible to pass in an already
     *           instantiated {@see \Google\ApiCore\Transport\TransportInterface} object. Note
     *           that when this object is provided, any settings in $transportConfig, and any
     *           $apiEndpoint setting, will be ignored.
     *     @type array $transportConfig
     *           Configuration options that will be used to construct the transport. Options for
     *           each supported transport type should be passed in a key for that transport. For
     *           example:
     *           $transportConfig = [
     *               'grpc' => [...],
     *               'rest' => [...],
     *           ];
     *           See the {@see \Google\ApiCore\Transport\GrpcTransport::build()} and
     *           {@see \Google\ApiCore\Transport\RestTransport::build()} methods for the
     *           supported options.
     *     @type callable $clientCertSource
     *           A callable which returns the client cert as a string. This can be used to
     *           provide a certificate and private key to the transport layer for mTLS.
     * }
     *
     * @throws ValidationException
     */
    public function __construct(array $options = [])
    {
        $clientOptions = $this->buildClientOptions($options);
        $this->setClientOptions($clientOptions);
        $this->operationsClient = $this->createOperationsClient($clientOptions);
    }

    /** Handles execution of the async variants for each documented method. */
    public function __call($method, $args)
    {
        if (substr($method, -5) !== 'Async') {
            trigger_error('Call to undefined method ' . __CLASS__ . "::$method()", E_USER_ERROR);
        }

        array_unshift($args, substr($method, 0, -5));
        return call_user_func_array([$this, 'startAsyncCall'], $args);
    }

    /**
     * Creates an app profile within an instance.
     *
     * The async variant is {@see self::createAppProfileAsync()} .
     *
     * @param CreateAppProfileRequest $request     A request to house fields associated with the call.
     * @param array                   $callOptions {
     *     Optional.
     *
     *     @type RetrySettings|array $retrySettings
     *           Retry settings to use for this call. Can be a {@see RetrySettings} object, or an
     *           associative array of retry settings parameters. See the documentation on
     *           {@see RetrySettings} for example usage.
     * }
     *
     * @return AppProfile
     *
     * @throws ApiException Thrown if the API call fails.
     */
    public function createAppProfile(CreateAppProfileRequest $request, array $callOptions = []): AppProfile
    {
        return $this->startApiCall('CreateAppProfile', $request, $callOptions)->wait();
    }

    /**
     * Creates a cluster within an instance.
     *
     * Note that exactly one of Cluster.serve_nodes and
     * Cluster.cluster_config.cluster_autoscaling_config can be set. If
     * serve_nodes is set to non-zero, then the cluster is manually scaled. If
     * cluster_config.cluster_autoscaling_config is non-empty, then autoscaling is
     * enabled.
     *
     * The async variant is {@see self::createClusterAsync()} .
     *
     * @param CreateClusterRequest $request     A request to house fields associated with the call.
     * @param array                $callOptions {
     *     Optional.
     *
     *     @type RetrySettings|array $retrySettings
     *           Retry settings to use for this call. Can be a {@see RetrySettings} object, or an
     *           associative array of retry settings parameters. See the documentation on
     *           {@see RetrySettings} for example usage.
     * }
     *
     * @return OperationResponse
     *
     * @throws ApiException Thrown if the API call fails.
     */
    public function createCluster(CreateClusterRequest $request, array $callOptions = []): OperationResponse
    {
        return $this->startApiCall('CreateCluster', $request, $callOptions)->wait();
    }

    /**
     * Create an instance within a project.
     *
     * Note that exactly one of Cluster.serve_nodes and
     * Cluster.cluster_config.cluster_autoscaling_config can be set. If
     * serve_nodes is set to non-zero, then the cluster is manually scaled. If
     * cluster_config.cluster_autoscaling_config is non-empty, then autoscaling is
     * enabled.
     *
     * The async variant is {@see self::createInstanceAsync()} .
     *
     * @param CreateInstanceRequest $request     A request to house fields associated with the call.
     * @param array                 $callOptions {
     *     Optional.
     *
     *     @type RetrySettings|array $retrySettings
     *           Retry settings to use for this call. Can be a {@see RetrySettings} object, or an
     *           associative array of retry settings parameters. See the documentation on
     *           {@see RetrySettings} for example usage.
     * }
     *
     * @return OperationResponse
     *
     * @throws ApiException Thrown if the API call fails.
     */
    public function createInstance(CreateInstanceRequest $request, array $callOptions = []): OperationResponse
    {
        return $this->startApiCall('CreateInstance', $request, $callOptions)->wait();
    }

    /**
     * Deletes an app profile from an instance.
     *
     * The async variant is {@see self::deleteAppProfileAsync()} .
     *
     * @param DeleteAppProfileRequest $request     A request to house fields associated with the call.
     * @param array                   $callOptions {
     *     Optional.
     *
     *     @type RetrySettings|array $retrySettings
     *           Retry settings to use for this call. Can be a {@see RetrySettings} object, or an
     *           associative array of retry settings parameters. See the documentation on
     *           {@see RetrySettings} for example usage.
     * }
     *
     * @throws ApiException Thrown if the API call fails.
     */
    public function deleteAppProfile(DeleteAppProfileRequest $request, array $callOptions = []): void
    {
        $this->startApiCall('DeleteAppProfile', $request, $callOptions)->wait();
    }

    /**
     * Deletes a cluster from an instance.
     *
     * The async variant is {@see self::deleteClusterAsync()} .
     *
     * @param DeleteClusterRequest $request     A request to house fields associated with the call.
     * @param array                $callOptions {
     *     Optional.
     *
     *     @type RetrySettings|array $retrySettings
     *           Retry settings to use for this call. Can be a {@see RetrySettings} object, or an
     *           associative array of retry settings parameters. See the documentation on
     *           {@see RetrySettings} for example usage.
     * }
     *
     * @throws ApiException Thrown if the API call fails.
     */
    public function deleteCluster(DeleteClusterRequest $request, array $callOptions = []): void
    {
        $this->startApiCall('DeleteCluster', $request, $callOptions)->wait();
    }

    /**
     * Delete an instance from a project.
     *
     * The async variant is {@see self::deleteInstanceAsync()} .
     *
     * @param DeleteInstanceRequest $request     A request to house fields associated with the call.
     * @param array                 $callOptions {
     *     Optional.
     *
     *     @type RetrySettings|array $retrySettings
     *           Retry settings to use for this call. Can be a {@see RetrySettings} object, or an
     *           associative array of retry settings parameters. See the documentation on
     *           {@see RetrySettings} for example usage.
     * }
     *
     * @throws ApiException Thrown if the API call fails.
     */
    public function deleteInstance(DeleteInstanceRequest $request, array $callOptions = []): void
    {
        $this->startApiCall('DeleteInstance', $request, $callOptions)->wait();
    }

    /**
     * Gets information about an app profile.
     *
     * The async variant is {@see self::getAppProfileAsync()} .
     *
     * @param GetAppProfileRequest $request     A request to house fields associated with the call.
     * @param array                $callOptions {
     *     Optional.
     *
     *     @type RetrySettings|array $retrySettings
     *           Retry settings to use for this call. Can be a {@see RetrySettings} object, or an
     *           associative array of retry settings parameters. See the documentation on
     *           {@see RetrySettings} for example usage.
     * }
     *
     * @return AppProfile
     *
     * @throws ApiException Thrown if the API call fails.
     */
    public function getAppProfile(GetAppProfileRequest $request, array $callOptions = []): AppProfile
    {
        return $this->startApiCall('GetAppProfile', $request, $callOptions)->wait();
    }

    /**
     * Gets information about a cluster.
     *
     * The async variant is {@see self::getClusterAsync()} .
     *
     * @param GetClusterRequest $request     A request to house fields associated with the call.
     * @param array             $callOptions {
     *     Optional.
     *
     *     @type RetrySettings|array $retrySettings
     *           Retry settings to use for this call. Can be a {@see RetrySettings} object, or an
     *           associative array of retry settings parameters. See the documentation on
     *           {@see RetrySettings} for example usage.
     * }
     *
     * @return Cluster
     *
     * @throws ApiException Thrown if the API call fails.
     */
    public function getCluster(GetClusterRequest $request, array $callOptions = []): Cluster
    {
        return $this->startApiCall('GetCluster', $request, $callOptions)->wait();
    }

    /**
     * Gets the access control policy for an instance resource. Returns an empty
     * policy if an instance exists but does not have a policy set.
     *
     * The async variant is {@see self::getIamPolicyAsync()} .
     *
     * @param GetIamPolicyRequest $request     A request to house fields associated with the call.
     * @param array               $callOptions {
     *     Optional.
     *
     *     @type RetrySettings|array $retrySettings
     *           Retry settings to use for this call. Can be a {@see RetrySettings} object, or an
     *           associative array of retry settings parameters. See the documentation on
     *           {@see RetrySettings} for example usage.
     * }
     *
     * @return Policy
     *
     * @throws ApiException Thrown if the API call fails.
     */
    public function getIamPolicy(GetIamPolicyRequest $request, array $callOptions = []): Policy
    {
        return $this->startApiCall('GetIamPolicy', $request, $callOptions)->wait();
    }

    /**
     * Gets information about an instance.
     *
     * The async variant is {@see self::getInstanceAsync()} .
     *
     * @param GetInstanceRequest $request     A request to house fields associated with the call.
     * @param array              $callOptions {
     *     Optional.
     *
     *     @type RetrySettings|array $retrySettings
     *           Retry settings to use for this call. Can be a {@see RetrySettings} object, or an
     *           associative array of retry settings parameters. See the documentation on
     *           {@see RetrySettings} for example usage.
     * }
     *
     * @return Instance
     *
     * @throws ApiException Thrown if the API call fails.
     */
    public function getInstance(GetInstanceRequest $request, array $callOptions = []): Instance
    {
        return $this->startApiCall('GetInstance', $request, $callOptions)->wait();
    }

    /**
     * Lists information about app profiles in an instance.
     *
     * The async variant is {@see self::listAppProfilesAsync()} .
     *
     * @param ListAppProfilesRequest $request     A request to house fields associated with the call.
     * @param array                  $callOptions {
     *     Optional.
     *
     *     @type RetrySettings|array $retrySettings
     *           Retry settings to use for this call. Can be a {@see RetrySettings} object, or an
     *           associative array of retry settings parameters. See the documentation on
     *           {@see RetrySettings} for example usage.
     * }
     *
     * @return PagedListResponse
     *
     * @throws ApiException Thrown if the API call fails.
     */
    public function listAppProfiles(ListAppProfilesRequest $request, array $callOptions = []): PagedListResponse
    {
        return $this->startApiCall('ListAppProfiles', $request, $callOptions);
    }

    /**
     * Lists information about clusters in an instance.
     *
     * The async variant is {@see self::listClustersAsync()} .
     *
     * @param ListClustersRequest $request     A request to house fields associated with the call.
     * @param array               $callOptions {
     *     Optional.
     *
     *     @type RetrySettings|array $retrySettings
     *           Retry settings to use for this call. Can be a {@see RetrySettings} object, or an
     *           associative array of retry settings parameters. See the documentation on
     *           {@see RetrySettings} for example usage.
     * }
     *
     * @return ListClustersResponse
     *
     * @throws ApiException Thrown if the API call fails.
     */
    public function listClusters(ListClustersRequest $request, array $callOptions = []): ListClustersResponse
    {
        return $this->startApiCall('ListClusters', $request, $callOptions)->wait();
    }

    /**
     * Lists hot tablets in a cluster, within the time range provided. Hot
     * tablets are ordered based on CPU usage.
     *
     * The async variant is {@see self::listHotTabletsAsync()} .
     *
     * @param ListHotTabletsRequest $request     A request to house fields associated with the call.
     * @param array                 $callOptions {
     *     Optional.
     *
     *     @type RetrySettings|array $retrySettings
     *           Retry settings to use for this call. Can be a {@see RetrySettings} object, or an
     *           associative array of retry settings parameters. See the documentation on
     *           {@see RetrySettings} for example usage.
     * }
     *
     * @return PagedListResponse
     *
     * @throws ApiException Thrown if the API call fails.
     */
    public function listHotTablets(ListHotTabletsRequest $request, array $callOptions = []): PagedListResponse
    {
        return $this->startApiCall('ListHotTablets', $request, $callOptions);
    }

    /**
     * Lists information about instances in a project.
     *
     * The async variant is {@see self::listInstancesAsync()} .
     *
     * @param ListInstancesRequest $request     A request to house fields associated with the call.
     * @param array                $callOptions {
     *     Optional.
     *
     *     @type RetrySettings|array $retrySettings
     *           Retry settings to use for this call. Can be a {@see RetrySettings} object, or an
     *           associative array of retry settings parameters. See the documentation on
     *           {@see RetrySettings} for example usage.
     * }
     *
     * @return ListInstancesResponse
     *
     * @throws ApiException Thrown if the API call fails.
     */
    public function listInstances(ListInstancesRequest $request, array $callOptions = []): ListInstancesResponse
    {
        return $this->startApiCall('ListInstances', $request, $callOptions)->wait();
    }

    /**
     * Partially updates a cluster within a project. This method is the preferred
     * way to update a Cluster.
     *
     * To enable and update autoscaling, set
     * cluster_config.cluster_autoscaling_config. When autoscaling is enabled,
     * serve_nodes is treated as an OUTPUT_ONLY field, meaning that updates to it
     * are ignored. Note that an update cannot simultaneously set serve_nodes to
     * non-zero and cluster_config.cluster_autoscaling_config to non-empty, and
     * also specify both in the update_mask.
     *
     * To disable autoscaling, clear cluster_config.cluster_autoscaling_config,
     * and explicitly set a serve_node count via the update_mask.
     *
     * The async variant is {@see self::partialUpdateClusterAsync()} .
     *
     * @param PartialUpdateClusterRequest $request     A request to house fields associated with the call.
     * @param array                       $callOptions {
     *     Optional.
     *
     *     @type RetrySettings|array $retrySettings
     *           Retry settings to use for this call. Can be a {@see RetrySettings} object, or an
     *           associative array of retry settings parameters. See the documentation on
     *           {@see RetrySettings} for example usage.
     * }
     *
     * @return OperationResponse
     *
     * @throws ApiException Thrown if the API call fails.
     */
    public function partialUpdateCluster(PartialUpdateClusterRequest $request, array $callOptions = []): OperationResponse
    {
        return $this->startApiCall('PartialUpdateCluster', $request, $callOptions)->wait();
    }

    /**
     * Partially updates an instance within a project. This method can modify all
     * fields of an Instance and is the preferred way to update an Instance.
     *
     * The async variant is {@see self::partialUpdateInstanceAsync()} .
     *
     * @param PartialUpdateInstanceRequest $request     A request to house fields associated with the call.
     * @param array                        $callOptions {
     *     Optional.
     *
     *     @type RetrySettings|array $retrySettings
     *           Retry settings to use for this call. Can be a {@see RetrySettings} object, or an
     *           associative array of retry settings parameters. See the documentation on
     *           {@see RetrySettings} for example usage.
     * }
     *
     * @return OperationResponse
     *
     * @throws ApiException Thrown if the API call fails.
     */
    public function partialUpdateInstance(PartialUpdateInstanceRequest $request, array $callOptions = []): OperationResponse
    {
        return $this->startApiCall('PartialUpdateInstance', $request, $callOptions)->wait();
    }

    /**
     * Sets the access control policy on an instance resource. Replaces any
     * existing policy.
     *
     * The async variant is {@see self::setIamPolicyAsync()} .
     *
     * @param SetIamPolicyRequest $request     A request to house fields associated with the call.
     * @param array               $callOptions {
     *     Optional.
     *
     *     @type RetrySettings|array $retrySettings
     *           Retry settings to use for this call. Can be a {@see RetrySettings} object, or an
     *           associative array of retry settings parameters. See the documentation on
     *           {@see RetrySettings} for example usage.
     * }
     *
     * @return Policy
     *
     * @throws ApiException Thrown if the API call fails.
     */
    public function setIamPolicy(SetIamPolicyRequest $request, array $callOptions = []): Policy
    {
        return $this->startApiCall('SetIamPolicy', $request, $callOptions)->wait();
    }

    /**
     * Returns permissions that the caller has on the specified instance resource.
     *
     * The async variant is {@see self::testIamPermissionsAsync()} .
     *
     * @param TestIamPermissionsRequest $request     A request to house fields associated with the call.
     * @param array                     $callOptions {
     *     Optional.
     *
     *     @type RetrySettings|array $retrySettings
     *           Retry settings to use for this call. Can be a {@see RetrySettings} object, or an
     *           associative array of retry settings parameters. See the documentation on
     *           {@see RetrySettings} for example usage.
     * }
     *
     * @return TestIamPermissionsResponse
     *
     * @throws ApiException Thrown if the API call fails.
     */
    public function testIamPermissions(TestIamPermissionsRequest $request, array $callOptions = []): TestIamPermissionsResponse
    {
        return $this->startApiCall('TestIamPermissions', $request, $callOptions)->wait();
    }

    /**
     * Updates an app profile within an instance.
     *
     * The async variant is {@see self::updateAppProfileAsync()} .
     *
     * @param UpdateAppProfileRequest $request     A request to house fields associated with the call.
     * @param array                   $callOptions {
     *     Optional.
     *
     *     @type RetrySettings|array $retrySettings
     *           Retry settings to use for this call. Can be a {@see RetrySettings} object, or an
     *           associative array of retry settings parameters. See the documentation on
     *           {@see RetrySettings} for example usage.
     * }
     *
     * @return OperationResponse
     *
     * @throws ApiException Thrown if the API call fails.
     */
    public function updateAppProfile(UpdateAppProfileRequest $request, array $callOptions = []): OperationResponse
    {
        return $this->startApiCall('UpdateAppProfile', $request, $callOptions)->wait();
    }

    /**
     * Updates a cluster within an instance.
     *
     * Note that UpdateCluster does not support updating
     * cluster_config.cluster_autoscaling_config. In order to update it, you
     * must use PartialUpdateCluster.
     *
     * The async variant is {@see self::updateClusterAsync()} .
     *
     * @param Cluster $request     A request to house fields associated with the call.
     * @param array   $callOptions {
     *     Optional.
     *
     *     @type RetrySettings|array $retrySettings
     *           Retry settings to use for this call. Can be a {@see RetrySettings} object, or an
     *           associative array of retry settings parameters. See the documentation on
     *           {@see RetrySettings} for example usage.
     * }
     *
     * @return OperationResponse
     *
     * @throws ApiException Thrown if the API call fails.
     */
    public function updateCluster(Cluster $request, array $callOptions = []): OperationResponse
    {
        return $this->startApiCall('UpdateCluster', $request, $callOptions)->wait();
    }

    /**
     * Updates an instance within a project. This method updates only the display
     * name and type for an Instance. To update other Instance properties, such as
     * labels, use PartialUpdateInstance.
     *
     * The async variant is {@see self::updateInstanceAsync()} .
     *
     * @param Instance $request     A request to house fields associated with the call.
     * @param array    $callOptions {
     *     Optional.
     *
     *     @type RetrySettings|array $retrySettings
     *           Retry settings to use for this call. Can be a {@see RetrySettings} object, or an
     *           associative array of retry settings parameters. See the documentation on
     *           {@see RetrySettings} for example usage.
     * }
     *
     * @return Instance
     *
     * @throws ApiException Thrown if the API call fails.
     */
    public function updateInstance(Instance $request, array $callOptions = []): Instance
    {
        return $this->startApiCall('UpdateInstance', $request, $callOptions)->wait();
    }
}
