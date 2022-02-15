<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/bigtable/admin/v2/table.proto

namespace Google\Cloud\Bigtable\Admin\V2\Table;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * The state of a table's data in a particular cluster.
 *
 * Generated from protobuf message <code>google.bigtable.admin.v2.Table.ClusterState</code>
 */
class ClusterState extends \Google\Protobuf\Internal\Message
{
    /**
     * Output only. The state of replication for the table in this cluster.
     *
     * Generated from protobuf field <code>.google.bigtable.admin.v2.Table.ClusterState.ReplicationState replication_state = 1;</code>
     */
    protected $replication_state = 0;
    /**
     * Output only. The encryption information for the table in this cluster.
     * If the encryption key protecting this resource is customer managed, then
     * its version can be rotated in Cloud Key Management Service (Cloud KMS).
     * The primary version of the key and its status will be reflected here when
     * changes propagate from Cloud KMS.
     *
     * Generated from protobuf field <code>repeated .google.bigtable.admin.v2.EncryptionInfo encryption_info = 2 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     */
    private $encryption_info;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type int $replication_state
     *           Output only. The state of replication for the table in this cluster.
     *     @type \Google\Cloud\Bigtable\Admin\V2\EncryptionInfo[]|\Google\Protobuf\Internal\RepeatedField $encryption_info
     *           Output only. The encryption information for the table in this cluster.
     *           If the encryption key protecting this resource is customer managed, then
     *           its version can be rotated in Cloud Key Management Service (Cloud KMS).
     *           The primary version of the key and its status will be reflected here when
     *           changes propagate from Cloud KMS.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Bigtable\Admin\V2\Table::initOnce();
        parent::__construct($data);
    }

    /**
     * Output only. The state of replication for the table in this cluster.
     *
     * Generated from protobuf field <code>.google.bigtable.admin.v2.Table.ClusterState.ReplicationState replication_state = 1;</code>
     * @return int
     */
    public function getReplicationState()
    {
        return $this->replication_state;
    }

    /**
     * Output only. The state of replication for the table in this cluster.
     *
     * Generated from protobuf field <code>.google.bigtable.admin.v2.Table.ClusterState.ReplicationState replication_state = 1;</code>
     * @param int $var
     * @return $this
     */
    public function setReplicationState($var)
    {
        GPBUtil::checkEnum($var, \Google\Cloud\Bigtable\Admin\V2\Table\ClusterState\ReplicationState::class);
        $this->replication_state = $var;

        return $this;
    }

    /**
     * Output only. The encryption information for the table in this cluster.
     * If the encryption key protecting this resource is customer managed, then
     * its version can be rotated in Cloud Key Management Service (Cloud KMS).
     * The primary version of the key and its status will be reflected here when
     * changes propagate from Cloud KMS.
     *
     * Generated from protobuf field <code>repeated .google.bigtable.admin.v2.EncryptionInfo encryption_info = 2 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getEncryptionInfo()
    {
        return $this->encryption_info;
    }

    /**
     * Output only. The encryption information for the table in this cluster.
     * If the encryption key protecting this resource is customer managed, then
     * its version can be rotated in Cloud Key Management Service (Cloud KMS).
     * The primary version of the key and its status will be reflected here when
     * changes propagate from Cloud KMS.
     *
     * Generated from protobuf field <code>repeated .google.bigtable.admin.v2.EncryptionInfo encryption_info = 2 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @param \Google\Cloud\Bigtable\Admin\V2\EncryptionInfo[]|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setEncryptionInfo($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::MESSAGE, \Google\Cloud\Bigtable\Admin\V2\EncryptionInfo::class);
        $this->encryption_info = $arr;

        return $this;
    }

}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(ClusterState::class, \Google\Cloud\Bigtable\Admin\V2\Table_ClusterState::class);

