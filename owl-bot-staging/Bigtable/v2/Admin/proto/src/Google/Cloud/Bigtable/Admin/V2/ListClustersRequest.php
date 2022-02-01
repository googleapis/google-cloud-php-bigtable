<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/bigtable/admin/v2/bigtable_instance_admin.proto

namespace Google\Cloud\Bigtable\Admin\V2;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Request message for BigtableInstanceAdmin.ListClusters.
 *
 * Generated from protobuf message <code>google.bigtable.admin.v2.ListClustersRequest</code>
 */
class ListClustersRequest extends \Google\Protobuf\Internal\Message
{
    /**
     * Required. The unique name of the instance for which a list of clusters is requested.
     * Values are of the form `projects/{project}/instances/{instance}`.
     * Use `{instance} = '-'` to list Clusters for all Instances in a project,
     * e.g., `projects/myproject/instances/-`.
     *
     * Generated from protobuf field <code>string parent = 1 [(.google.api.field_behavior) = REQUIRED, (.google.api.resource_reference) = {</code>
     */
    protected $parent = '';
    /**
     * DEPRECATED: This field is unused and ignored.
     *
     * Generated from protobuf field <code>string page_token = 2;</code>
     */
    protected $page_token = '';

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $parent
     *           Required. The unique name of the instance for which a list of clusters is requested.
     *           Values are of the form `projects/{project}/instances/{instance}`.
     *           Use `{instance} = '-'` to list Clusters for all Instances in a project,
     *           e.g., `projects/myproject/instances/-`.
     *     @type string $page_token
     *           DEPRECATED: This field is unused and ignored.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Bigtable\Admin\V2\BigtableInstanceAdmin::initOnce();
        parent::__construct($data);
    }

    /**
     * Required. The unique name of the instance for which a list of clusters is requested.
     * Values are of the form `projects/{project}/instances/{instance}`.
     * Use `{instance} = '-'` to list Clusters for all Instances in a project,
     * e.g., `projects/myproject/instances/-`.
     *
     * Generated from protobuf field <code>string parent = 1 [(.google.api.field_behavior) = REQUIRED, (.google.api.resource_reference) = {</code>
     * @return string
     */
    public function getParent()
    {
        return $this->parent;
    }

    /**
     * Required. The unique name of the instance for which a list of clusters is requested.
     * Values are of the form `projects/{project}/instances/{instance}`.
     * Use `{instance} = '-'` to list Clusters for all Instances in a project,
     * e.g., `projects/myproject/instances/-`.
     *
     * Generated from protobuf field <code>string parent = 1 [(.google.api.field_behavior) = REQUIRED, (.google.api.resource_reference) = {</code>
     * @param string $var
     * @return $this
     */
    public function setParent($var)
    {
        GPBUtil::checkString($var, True);
        $this->parent = $var;

        return $this;
    }

    /**
     * DEPRECATED: This field is unused and ignored.
     *
     * Generated from protobuf field <code>string page_token = 2;</code>
     * @return string
     */
    public function getPageToken()
    {
        return $this->page_token;
    }

    /**
     * DEPRECATED: This field is unused and ignored.
     *
     * Generated from protobuf field <code>string page_token = 2;</code>
     * @param string $var
     * @return $this
     */
    public function setPageToken($var)
    {
        GPBUtil::checkString($var, True);
        $this->page_token = $var;

        return $this;
    }

}
