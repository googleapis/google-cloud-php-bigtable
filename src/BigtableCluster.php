<?php
namespace Google\Cloud\Bigtable\src;

use Google\Cloud\Bigtable\Admin\V2\BigtableInstanceAdminClient;
use Google\Bigtable\Admin\V2\Cluster;
use Google\Bigtable\Admin\V2\Cluster_State;
use Google\Bigtable\Admin\V2\StorageType;

/**
* 
*/
class BigtableCluster
{
	private $bigtableInstanceAdminClient;

	public function __construct()
	{
		$this->bigtableInstanceAdminClient = new BigtableInstanceAdminClient();
    }

    /**
     * Formats a string containing the fully-qualified path to represent
     * a location resource.
     *
     * @param string $project
     * @param string $location
     *
     * @return string The formatted location resource.
     * @experimental
     */
    public static function locationName($project, $location)
    {
        return BigtableInstanceAdminClient::locationName($project, $location);
    }

    /**
     * Formats a string containing the fully-qualified path to represent
     * a cluster resource.
     *
     * @param string $project
     * @param string $instance
     * @param string $cluster
     *
     * @return string The formatted cluster resource.
     * @experimental
     */
    public static function clusterName($project, $instance, $cluster)
    {
        return BigtableInstanceAdminClient::clusterName($project, $instance, $cluster);
    }
    
    /**
     * Gets information about a cluster.
     *
     * @param string $name         The unique name of the requested cluster. Values are of the form
     *                             `projects/<project>/instances/<instance>/clusters/<cluster>`.
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
     * @return \Google\Bigtable\Admin\V2\Cluster
     *
     * @throws \Google\GAX\ApiException if the remote call fails
     * @experimental
     */
    public function getCluster($name, $optionalArgs = [])
    {
        try {
            $Cluster = $this->bigtableInstanceAdminClient->getCluster($name, $optionalArgs);
            return $Cluster;
        } finally {
            $this->bigtableInstanceAdminClient->close();
        }
    }

    /**
     * Creates a cluster within an instance.
     *
     * @param string  $parent       The unique name of the instance in which to create the new cluster.
     *                              Values are of the form
     *                              `projects/<project>/instances/<instance>`.
     * @param string  $clusterId    The ID to be used when referring to the new cluster within its instance,
     *                              e.g., just `mycluster` rather than
     *                              `projects/myproject/instances/myinstance/clusters/mycluster`.
     * @param Cluster $cluster      The cluster to be created.
     *                              Fields marked `OutputOnly` must be left blank.
     * @param array   $optionalArgs {
     *                              Optional.
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
     * @experimental
     */
    public function createCluster($parent, $location, $clusterId, $optionalArgs = [])
    {
        try {
            echo $parent . "\t $clusterId \t $location";
            $cluster = new Cluster();
            // $cluster->setName($clusterId);
            $cluster->setLocation($location);
            $cluster->setDefaultStorageType(StorageType::HDD); //2
            
            // $cluster->setState(Cluster_State::CREATING); //2
            // $cluster->setServeNodes(4);
            
            $operationResponse = $this->bigtableInstanceAdminClient->createCluster($parent, $clusterId, $cluster, $optionalArgs);
            print_r($operationResponse);
            // $operationResponse->pollUntilComplete();
            // if ($operationResponse->operationSucceeded()) {
            //     $result = $operationResponse->getResult();
            //     // doSomethingWith($result)
            //     echo "success";
            //     return $result;
            // } else {
            //     $error = $operationResponse->getError();
            //     // handleError($error)
            //     echo "error";
            //     return $error;
            // }
        } finally {
            $this->bigtableInstanceAdminClient->close();
        }
    }

    /**
     * Updates a cluster within an instance.
     *
     * @param string $name               (`OutputOnly`)
     *                                   The unique name of the cluster. Values are of the form
     *                                   `projects/<project>/instances/<instance>/clusters/[a-z][-a-z0-9]*`.
     * @param string $location           (`CreationOnly`)
     *                                   The location where this cluster's nodes and storage reside. For best
     *                                   performance, clients should be located as close as possible to this cluster.
     *                                   Currently only zones are supported, so values should be of the form
     *                                   `projects/<project>/locations/<zone>`.
     * @param int    $serveNodes         The number of nodes allocated to this cluster. More nodes enable higher
     *                                   throughput and more consistent performance.
     * @param int    $defaultStorageType (`CreationOnly`)
     *                                   The type of storage used by this cluster to serve its
     *                                   parent instance's tables, unless explicitly overridden.
     *                                   For allowed values, use constants defined on {@see \Google\Bigtable\Admin\V2\StorageType}
     * @param array  $optionalArgs       {
     *                                   Optional.
     *
     *     @type int $state
     *          (`OutputOnly`)
     *          The current state of the cluster.
     *          For allowed values, use constants defined on {@see \Google\Bigtable\Admin\V2\Cluster_State}
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
     * @experimental
     */
    public function updateCluster($name, $location, $serveNodes, $defaultStorageType, $optionalArgs = [])
    {
        try {
            echo $name;
            echo "\t $location";
            $defaultStorageType = StorageType::STORAGE_TYPE_UNSPECIFIED;
            $operationResponse = $this->bigtableInstanceAdminClient->updateCluster($name, $location, $serveNodes, $defaultStorageType, $optionalArgs);
            print_r($operationResponse);
            $operationResponse->pollUntilComplete();
            if ($operationResponse->operationSucceeded()) {
                $result = $operationResponse->getResult();
                // doSomethingWith($result)
                echo "success";
                return $result;
            } else {
                $error = $operationResponse->getError();
                // handleError($error)
                echo "error";
                return $error;
            }
        } finally {
            $this->bigtableInstanceAdminClient->close();
        }
    }

    /**
     * Deletes a cluster from an instance.
     *
     * @param string $name         The unique name of the cluster to be deleted. Values are of the form
     *                             `projects/<project>/instances/<instance>/clusters/<cluster>`.
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
     * @throws \Google\GAX\ApiException if the remote call fails
     * @experimental
     */
    public function deleteCluster($name, $optionalArgs = [])
    {
        try {
            return $this->bigtableInstanceAdminClient->deleteCluster($name, $optionalArgs);
        } finally {
            $this->bigtableInstanceAdminClient->close();
        }
    }

    /**
     * Lists information about clusters in an instance.
     *
     * @param string $parent       The unique name of the instance for which a list of clusters is requested.
     *                             Values are of the form `projects/<project>/instances/<instance>`.
     *                             Use `<instance> = '-'` to list Clusters for all Instances in a project,
     *                             e.g., `projects/myproject/instances/-`.
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
     * @return \Google\Bigtable\Admin\V2\ListClustersResponse
     *
     * @throws \Google\GAX\ApiException if the remote call fails
     * @experimental
     */
    public function listClusters($parent, $optionalArgs = [])
    {
        try {
            $response = $this->bigtableInstanceAdminClient->listClusters($parent, $optionalArgs);
            return $response;
        } finally {
            $this->bigtableInstanceAdminClient->close();
        }
    }
}
?>