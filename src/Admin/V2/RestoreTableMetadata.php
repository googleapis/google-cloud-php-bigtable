<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/bigtable/admin/v2/bigtable_table_admin.proto

namespace Google\Cloud\Bigtable\Admin\V2;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Metadata type for the long-running operation returned by
 * [RestoreTable][google.bigtable.admin.v2.BigtableTableAdmin.RestoreTable].
 *
 * Generated from protobuf message <code>google.bigtable.admin.v2.RestoreTableMetadata</code>
 */
class RestoreTableMetadata extends \Google\Protobuf\Internal\Message
{
    /**
     * Name of the table being created and restored to.
     *
     * Generated from protobuf field <code>string name = 1;</code>
     */
    protected $name = '';
    /**
     * The type of the restore source.
     *
     * Generated from protobuf field <code>.google.bigtable.admin.v2.RestoreSourceType source_type = 2;</code>
     */
    protected $source_type = 0;
    /**
     * If exists, the name of the long-running operation that will be used to
     * track the post-restore optimization process to optimize the performance of
     * the restored table. The metadata type of the long-running operation is
     * [OptimizeRestoreTableMetadata][]. The response type is
     * [Empty][google.protobuf.Empty]. This long-running operation may be
     * automatically created by the system if applicable after the
     * RestoreTable long-running operation completes successfully. This operation
     * may not be created if the table is already optimized or the restore was
     * not successful.
     *
     * Generated from protobuf field <code>string optimize_table_operation_name = 4;</code>
     */
    protected $optimize_table_operation_name = '';
    /**
     * The progress of the
     * [RestoreTable][google.bigtable.admin.v2.BigtableTableAdmin.RestoreTable]
     * operation.
     *
     * Generated from protobuf field <code>.google.bigtable.admin.v2.OperationProgress progress = 5;</code>
     */
    protected $progress = null;
    protected $source_info;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $name
     *           Name of the table being created and restored to.
     *     @type int $source_type
     *           The type of the restore source.
     *     @type \Google\Cloud\Bigtable\Admin\V2\BackupInfo $backup_info
     *     @type string $optimize_table_operation_name
     *           If exists, the name of the long-running operation that will be used to
     *           track the post-restore optimization process to optimize the performance of
     *           the restored table. The metadata type of the long-running operation is
     *           [OptimizeRestoreTableMetadata][]. The response type is
     *           [Empty][google.protobuf.Empty]. This long-running operation may be
     *           automatically created by the system if applicable after the
     *           RestoreTable long-running operation completes successfully. This operation
     *           may not be created if the table is already optimized or the restore was
     *           not successful.
     *     @type \Google\Cloud\Bigtable\Admin\V2\OperationProgress $progress
     *           The progress of the
     *           [RestoreTable][google.bigtable.admin.v2.BigtableTableAdmin.RestoreTable]
     *           operation.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Bigtable\Admin\V2\BigtableTableAdmin::initOnce();
        parent::__construct($data);
    }

    /**
     * Name of the table being created and restored to.
     *
     * Generated from protobuf field <code>string name = 1;</code>
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * Name of the table being created and restored to.
     *
     * Generated from protobuf field <code>string name = 1;</code>
     * @param string $var
     * @return $this
     */
    public function setName($var)
    {
        GPBUtil::checkString($var, True);
        $this->name = $var;

        return $this;
    }

    /**
     * The type of the restore source.
     *
     * Generated from protobuf field <code>.google.bigtable.admin.v2.RestoreSourceType source_type = 2;</code>
     * @return int
     */
    public function getSourceType()
    {
        return $this->source_type;
    }

    /**
     * The type of the restore source.
     *
     * Generated from protobuf field <code>.google.bigtable.admin.v2.RestoreSourceType source_type = 2;</code>
     * @param int $var
     * @return $this
     */
    public function setSourceType($var)
    {
        GPBUtil::checkEnum($var, \Google\Cloud\Bigtable\Admin\V2\RestoreSourceType::class);
        $this->source_type = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>.google.bigtable.admin.v2.BackupInfo backup_info = 3;</code>
     * @return \Google\Cloud\Bigtable\Admin\V2\BackupInfo|null
     */
    public function getBackupInfo()
    {
        return $this->readOneof(3);
    }

    public function hasBackupInfo()
    {
        return $this->hasOneof(3);
    }

    /**
     * Generated from protobuf field <code>.google.bigtable.admin.v2.BackupInfo backup_info = 3;</code>
     * @param \Google\Cloud\Bigtable\Admin\V2\BackupInfo $var
     * @return $this
     */
    public function setBackupInfo($var)
    {
        GPBUtil::checkMessage($var, \Google\Cloud\Bigtable\Admin\V2\BackupInfo::class);
        $this->writeOneof(3, $var);

        return $this;
    }

    /**
     * If exists, the name of the long-running operation that will be used to
     * track the post-restore optimization process to optimize the performance of
     * the restored table. The metadata type of the long-running operation is
     * [OptimizeRestoreTableMetadata][]. The response type is
     * [Empty][google.protobuf.Empty]. This long-running operation may be
     * automatically created by the system if applicable after the
     * RestoreTable long-running operation completes successfully. This operation
     * may not be created if the table is already optimized or the restore was
     * not successful.
     *
     * Generated from protobuf field <code>string optimize_table_operation_name = 4;</code>
     * @return string
     */
    public function getOptimizeTableOperationName()
    {
        return $this->optimize_table_operation_name;
    }

    /**
     * If exists, the name of the long-running operation that will be used to
     * track the post-restore optimization process to optimize the performance of
     * the restored table. The metadata type of the long-running operation is
     * [OptimizeRestoreTableMetadata][]. The response type is
     * [Empty][google.protobuf.Empty]. This long-running operation may be
     * automatically created by the system if applicable after the
     * RestoreTable long-running operation completes successfully. This operation
     * may not be created if the table is already optimized or the restore was
     * not successful.
     *
     * Generated from protobuf field <code>string optimize_table_operation_name = 4;</code>
     * @param string $var
     * @return $this
     */
    public function setOptimizeTableOperationName($var)
    {
        GPBUtil::checkString($var, True);
        $this->optimize_table_operation_name = $var;

        return $this;
    }

    /**
     * The progress of the
     * [RestoreTable][google.bigtable.admin.v2.BigtableTableAdmin.RestoreTable]
     * operation.
     *
     * Generated from protobuf field <code>.google.bigtable.admin.v2.OperationProgress progress = 5;</code>
     * @return \Google\Cloud\Bigtable\Admin\V2\OperationProgress|null
     */
    public function getProgress()
    {
        return $this->progress;
    }

    public function hasProgress()
    {
        return isset($this->progress);
    }

    public function clearProgress()
    {
        unset($this->progress);
    }

    /**
     * The progress of the
     * [RestoreTable][google.bigtable.admin.v2.BigtableTableAdmin.RestoreTable]
     * operation.
     *
     * Generated from protobuf field <code>.google.bigtable.admin.v2.OperationProgress progress = 5;</code>
     * @param \Google\Cloud\Bigtable\Admin\V2\OperationProgress $var
     * @return $this
     */
    public function setProgress($var)
    {
        GPBUtil::checkMessage($var, \Google\Cloud\Bigtable\Admin\V2\OperationProgress::class);
        $this->progress = $var;

        return $this;
    }

    /**
     * @return string
     */
    public function getSourceInfo()
    {
        return $this->whichOneof("source_info");
    }

}

