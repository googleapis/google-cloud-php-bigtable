<?php
/**
 * Copyright 2018, Google LLC All rights reserved.
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

namespace Google\Cloud\Bigtable\Filter;

use Google\Cloud\Bigtable\V2\RowFilter;
use Google\Cloud\Bigtable\V2\RowFilter\Chain;

/**
 * Chains together multiple filters.
 *
 * Example:
 * ```
 * use Google\Cloud\Bigtable\Filter;
 *
 * $chainFilter = Filter::chain();
 * ```
 */
class ChainFilter implements FilterInterface
{
    /**
     * @var RowFilter[]
     */
    private $filters = [];

    /**
     * Adds a filter to the chain.
     *
     * Example:
     * ```
     * use Google\Cloud\Bigtable\Filter;
     *
     * $chainFilter->addFilter(
     *     Filter::qualifier()->regex('prefix.*')
     * );
     * ```
     *
     * @param FilterInterface $filter A filter to add to the chain.
     * @return ChainFilter
     */
    public function addFilter(FilterInterface $filter)
    {
        $this->filters[] = $filter->toProto();
        return $this;
    }

    /**
     * Get the proto representation of the filter.
     *
     * @internal
     * @access private
     * @return RowFilter
     */
    public function toProto()
    {
        $chain = (new Chain())
            ->setFilters($this->filters);
        return (new RowFilter())
            ->setChain($chain);
    }
}
