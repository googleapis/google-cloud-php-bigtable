<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/bigtable/admin/v2/bigtable_table_admin.proto

namespace Google\Cloud\Bigtable\Admin\V2;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Metadata type for the google.longrunning.Operation returned by
 * [CopyBackup][google.bigtable.admin.v2.BigtableTableAdmin.CopyBackup].
 *
 * Generated from protobuf message <code>google.bigtable.admin.v2.CopyBackupMetadata</code>
 */
class CopyBackupMetadata extends \Google\Protobuf\Internal\Message
{
    /**
     * The name of the backup being created through the copy operation.
     * Values are of the form
     * `projects/<project>/instances/<instance>/clusters/<cluster>/backups/<backup>`.
     *
     * Generated from protobuf field <code>string name = 1 [(.google.api.resource_reference) = {</code>
     */
    protected $name = '';
    /**
     * Information about the source backup that is being copied from.
     *
     * Generated from protobuf field <code>.google.bigtable.admin.v2.BackupInfo source_backup_info = 2;</code>
     */
    protected $source_backup_info = null;
    /**
     * The progress of the
     * [CopyBackup][google.bigtable.admin.v2.BigtableTableAdmin.CopyBackup]
     * operation.
     *
     * Generated from protobuf field <code>.google.bigtable.admin.v2.OperationProgress progress = 3;</code>
     */
    protected $progress = null;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $name
     *           The name of the backup being created through the copy operation.
     *           Values are of the form
     *           `projects/<project>/instances/<instance>/clusters/<cluster>/backups/<backup>`.
     *     @type \Google\Cloud\Bigtable\Admin\V2\BackupInfo $source_backup_info
     *           Information about the source backup that is being copied from.
     *     @type \Google\Cloud\Bigtable\Admin\V2\OperationProgress $progress
     *           The progress of the
     *           [CopyBackup][google.bigtable.admin.v2.BigtableTableAdmin.CopyBackup]
     *           operation.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Bigtable\Admin\V2\BigtableTableAdmin::initOnce();
        parent::__construct($data);
    }

    /**
     * The name of the backup being created through the copy operation.
     * Values are of the form
     * `projects/<project>/instances/<instance>/clusters/<cluster>/backups/<backup>`.
     *
     * Generated from protobuf field <code>string name = 1 [(.google.api.resource_reference) = {</code>
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * The name of the backup being created through the copy operation.
     * Values are of the form
     * `projects/<project>/instances/<instance>/clusters/<cluster>/backups/<backup>`.
     *
     * Generated from protobuf field <code>string name = 1 [(.google.api.resource_reference) = {</code>
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
     * Information about the source backup that is being copied from.
     *
     * Generated from protobuf field <code>.google.bigtable.admin.v2.BackupInfo source_backup_info = 2;</code>
     * @return \Google\Cloud\Bigtable\Admin\V2\BackupInfo|null
     */
    public function getSourceBackupInfo()
    {
        return $this->source_backup_info;
    }

    public function hasSourceBackupInfo()
    {
        return isset($this->source_backup_info);
    }

    public function clearSourceBackupInfo()
    {
        unset($this->source_backup_info);
    }

    /**
     * Information about the source backup that is being copied from.
     *
     * Generated from protobuf field <code>.google.bigtable.admin.v2.BackupInfo source_backup_info = 2;</code>
     * @param \Google\Cloud\Bigtable\Admin\V2\BackupInfo $var
     * @return $this
     */
    public function setSourceBackupInfo($var)
    {
        GPBUtil::checkMessage($var, \Google\Cloud\Bigtable\Admin\V2\BackupInfo::class);
        $this->source_backup_info = $var;

        return $this;
    }

    /**
     * The progress of the
     * [CopyBackup][google.bigtable.admin.v2.BigtableTableAdmin.CopyBackup]
     * operation.
     *
     * Generated from protobuf field <code>.google.bigtable.admin.v2.OperationProgress progress = 3;</code>
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
     * [CopyBackup][google.bigtable.admin.v2.BigtableTableAdmin.CopyBackup]
     * operation.
     *
     * Generated from protobuf field <code>.google.bigtable.admin.v2.OperationProgress progress = 3;</code>
     * @param \Google\Cloud\Bigtable\Admin\V2\OperationProgress $var
     * @return $this
     */
    public function setProgress($var)
    {
        GPBUtil::checkMessage($var, \Google\Cloud\Bigtable\Admin\V2\OperationProgress::class);
        $this->progress = $var;

        return $this;
    }

}

