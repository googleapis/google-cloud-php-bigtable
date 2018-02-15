<?php
/*
 * Copyright 2017, Google LLC All rights reserved.
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

namespace Google\Cloud\Bigtable\src;

use Google\Cloud\Bigtable\Admin\V2\BigtableInstanceAdminClient;
use Google\Cloud\Bigtable\Admin\V2\Instance;
use Google\Cloud\Bigtable\Admin\V2\Cluster;
use Google\Cloud\Protobuf\Internal\MapField;
use Google\Cloud\Protobuf\Internal\GPBType;
use Google\Cloud\Bigtable\Admin\V2\Instance_Type;

/**
*
*/
class BigtableInstance
{
    private $InstanceAdmin;
    private $projectId;
    private $instanceId;

    /**
     * Constructor.
     * @param array $args {
     *
     *     @param string $projectId
     *
     *     @param string $instanceId
     *
     */
    public function __construct($args)
    {
        $this->projectId = $args['projectId'];
        $this->instanceId = $args['instanceId'];
        $this->InstanceAdmin = new BigtableInstanceAdminClient();
    }
    
    /**
     * Formats a string containing the fully-qualified path to represent
     * a project resource.
     *
     * @return string The formatted project resource.
     */
    private function projectName()
    {
        $formattedParent = BigtableInstanceAdminClient::projectName($this->projectId);
        return $formattedParent;
    }

    /**
     * Formats a string containing the fully-qualified path to represent
     * a instance resource.
     *
     * @return string The formatted instance resource.
     */
    private function instanceName()
    {
        $formattedParent = BigtableInstanceAdminClient::instanceName($this->projectId, $this->instanceId);
        return $formattedParent;
    }

    /**
     * Formats a string containing the fully-qualified path to represent
     * a location resource.
     *
     * @param string $location
     *
     * @return string The formatted location resource.
     */
    private function locationName($location)
    {
        return BigtableInstanceAdminClient::locationName($this->projectId, $location);
    }

    /**
     * Create an instance within a project.
     * @param string   $instanceId   The ID to be used when referring to the new instance within its project,
     *                               e.g., just `myinstance` rather than
     *                               `projects/myproject/instances/myinstance`.
     *
     * @param string   $location     location
     *
     * @param string   $clusterId    cluseter id
     *
     * @param array    $optionalArgs {
     *                               Optional.
     *
     *     @type \Google\GAX\RetrySettings|array $retrySettings
     *          Retry settings to use for this call. Can be a
     *          {@see Google\GAX\RetrySettings} object, or an associative array
     *          of retry settings parameters. See the documentation on
     *          {@see Google\GAX\RetrySettings} for example usage.
     * }
     *
     * @return \Google\GAX\OperationResponse
     *
     * @throws \Google\GAX\ApiException if the remote call fails
     */
    public function createInstance($instanceId, $location, $clusterId, $optionalArgs = [])
    {
        $parent = $this->projectName();
        $formattedLocation = $this->locationName($location);

        $instance = new Instance();
        $instance->setDisplayName($instanceId);
        $instance->setType(2);

        $clusters = new Cluster();
        $clusters->setName($clusterId);
        $clusters->setDefaultStorageType(2);
        $clusters->setLocation($formattedLocation);
        $MapField = new MapField(GPBType::STRING, GPBType::MESSAGE, Cluster::class);
        $MapField[$clusterId] = $clusters;

        $Instance = $this->InstanceAdmin->createInstance($parent, $instanceId, $instance, $MapField, $optionalArgs);
        return $Instance;
    }

    /**
     * Updates an instance within a project.
     *
     * @param string $displayName  The descriptive name for this instance as it appears in UIs.
     *                             Can be changed at any time, but should be kept globally unique
     *                             to avoid confusion.
     * @param int    $type         The type of the instance. Defaults to `PRODUCTION`.
     *                             For allowed values, use constants defined on
     *                             {@see \Google\Bigtable\Admin\V2\Instance_Type}
     *
     * @param array  $optionalArgs {
     *                             Optional.
     *
     *     @type int $state
     *          (`OutputOnly`)
     *          The current state of the instance.
     *          For allowed values, use constants defined on {@see \Google\Bigtable\Admin\V2\Instance_State}
     *     @type \Google\GAX\RetrySettings|array $retrySettings
     *          Retry settings to use for this call. Can be a
     *          {@see Google\GAX\RetrySettings} object, or an associative array
     *          of retry settings parameters. See the documentation on
     *          {@see Google\GAX\RetrySettings} for example usage.
     * }
     *
     * @return \Google\Bigtable\Admin\V2\Instance
     *
     * @throws \Google\GAX\ApiException if the remote call fails
     * @experimental
     */
    public function updateInstance($displayName, $type, $optionalArgs = [])
    {
        $name = $this->instanceName();
        $Instance = $this->InstanceAdmin->updateInstance($name, $displayName, $type, $optionalArgs = []);
        return $Instance;
    }

    /**
     * Lists information about instances in a project.
     *
     * @param array  $optionalArgs {
     *                             Optional.
     *
     *     @type string $pageToken
     *          The value of `next_page_token` returned by a previous call.
     *     @type \Google\GAX\RetrySettings|array $retrySettings
     *          Retry settings to use for this call. Can be a
     *          {@see Google\GAX\RetrySettings} object, or an associative array
     *          of retry settings parameters. See the documentation on
     *          {@see Google\GAX\RetrySettings} for example usage.
     * }
     *
     * @return \Google\Bigtable\Admin\V2\ListInstancesResponse
     *
     * @throws \Google\GAX\ApiException if the remote call fails
    */
    public function listInstances($optionalArgs = [])
    {
        $parent = $this->projectName();
        $ListInstances = $this->InstanceAdmin->listInstances($parent, $optionalArgs);
        return $ListInstances;
    }

    /**
     * Delete an instance from a project.
     *
     * @param array  $optionalArgs {
     *                             Optional.
     *
     *     @type \Google\GAX\RetrySettings|array $retrySettings
     *          Retry settings to use for this call. Can be a
     *          {@see Google\GAX\RetrySettings} object, or an associative array
     *          of retry settings parameters. See the documentation on
     *          {@see Google\GAX\RetrySettings} for example usage.
     * }
     *
     * @return \Google\Protobuf\GPBEmpty
     *
     * @throws \Google\GAX\ApiException if the remote call fails
     */
    public function deleteInstance($optionalArgs = [])
    {
        $formattedParent = $this->instanceName();
        $response = $this->InstanceAdmin->deleteInstance($formattedParent, $optionalArgs);
        return $response;
    }
}
