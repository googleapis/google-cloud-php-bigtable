<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/bigtable/admin/v2/bigtable_instance_admin.proto

namespace Google\Cloud\Bigtable\Admin\V2;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Request message for BigtableInstanceAdmin.UpdateMaterializedView.
 *
 * Generated from protobuf message <code>google.bigtable.admin.v2.UpdateMaterializedViewRequest</code>
 */
class UpdateMaterializedViewRequest extends \Google\Protobuf\Internal\Message
{
    /**
     * Required. The materialized view to update.
     * The materialized view's `name` field is used to identify the view to
     * update. Format:
     * `projects/{project}/instances/{instance}/materializedViews/{materialized_view}`.
     *
     * Generated from protobuf field <code>.google.bigtable.admin.v2.MaterializedView materialized_view = 1 [(.google.api.field_behavior) = REQUIRED];</code>
     */
    protected $materialized_view = null;
    /**
     * Optional. The list of fields to update.
     *
     * Generated from protobuf field <code>.google.protobuf.FieldMask update_mask = 2 [(.google.api.field_behavior) = OPTIONAL];</code>
     */
    protected $update_mask = null;

    /**
     * @param \Google\Cloud\Bigtable\Admin\V2\MaterializedView $materializedView Required. The materialized view to update.
     *
     *                                                                           The materialized view's `name` field is used to identify the view to
     *                                                                           update. Format:
     *                                                                           `projects/{project}/instances/{instance}/materializedViews/{materialized_view}`.
     * @param \Google\Protobuf\FieldMask                       $updateMask       Optional. The list of fields to update.
     *
     * @return \Google\Cloud\Bigtable\Admin\V2\UpdateMaterializedViewRequest
     *
     * @experimental
     */
    public static function build(\Google\Cloud\Bigtable\Admin\V2\MaterializedView $materializedView, \Google\Protobuf\FieldMask $updateMask): self
    {
        return (new self())
            ->setMaterializedView($materializedView)
            ->setUpdateMask($updateMask);
    }

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type \Google\Cloud\Bigtable\Admin\V2\MaterializedView $materialized_view
     *           Required. The materialized view to update.
     *           The materialized view's `name` field is used to identify the view to
     *           update. Format:
     *           `projects/{project}/instances/{instance}/materializedViews/{materialized_view}`.
     *     @type \Google\Protobuf\FieldMask $update_mask
     *           Optional. The list of fields to update.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Bigtable\Admin\V2\BigtableInstanceAdmin::initOnce();
        parent::__construct($data);
    }

    /**
     * Required. The materialized view to update.
     * The materialized view's `name` field is used to identify the view to
     * update. Format:
     * `projects/{project}/instances/{instance}/materializedViews/{materialized_view}`.
     *
     * Generated from protobuf field <code>.google.bigtable.admin.v2.MaterializedView materialized_view = 1 [(.google.api.field_behavior) = REQUIRED];</code>
     * @return \Google\Cloud\Bigtable\Admin\V2\MaterializedView|null
     */
    public function getMaterializedView()
    {
        return $this->materialized_view;
    }

    public function hasMaterializedView()
    {
        return isset($this->materialized_view);
    }

    public function clearMaterializedView()
    {
        unset($this->materialized_view);
    }

    /**
     * Required. The materialized view to update.
     * The materialized view's `name` field is used to identify the view to
     * update. Format:
     * `projects/{project}/instances/{instance}/materializedViews/{materialized_view}`.
     *
     * Generated from protobuf field <code>.google.bigtable.admin.v2.MaterializedView materialized_view = 1 [(.google.api.field_behavior) = REQUIRED];</code>
     * @param \Google\Cloud\Bigtable\Admin\V2\MaterializedView $var
     * @return $this
     */
    public function setMaterializedView($var)
    {
        GPBUtil::checkMessage($var, \Google\Cloud\Bigtable\Admin\V2\MaterializedView::class);
        $this->materialized_view = $var;

        return $this;
    }

    /**
     * Optional. The list of fields to update.
     *
     * Generated from protobuf field <code>.google.protobuf.FieldMask update_mask = 2 [(.google.api.field_behavior) = OPTIONAL];</code>
     * @return \Google\Protobuf\FieldMask|null
     */
    public function getUpdateMask()
    {
        return $this->update_mask;
    }

    public function hasUpdateMask()
    {
        return isset($this->update_mask);
    }

    public function clearUpdateMask()
    {
        unset($this->update_mask);
    }

    /**
     * Optional. The list of fields to update.
     *
     * Generated from protobuf field <code>.google.protobuf.FieldMask update_mask = 2 [(.google.api.field_behavior) = OPTIONAL];</code>
     * @param \Google\Protobuf\FieldMask $var
     * @return $this
     */
    public function setUpdateMask($var)
    {
        GPBUtil::checkMessage($var, \Google\Protobuf\FieldMask::class);
        $this->update_mask = $var;

        return $this;
    }

}

