<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/bigtable/admin/v2/table.proto

namespace Google\Cloud\Bigtable\Admin\V2\Backup;

use UnexpectedValueException;

/**
 * The type of the backup.
 *
 * Protobuf type <code>google.bigtable.admin.v2.Backup.BackupType</code>
 */
class BackupType
{
    /**
     * Not specified.
     *
     * Generated from protobuf enum <code>BACKUP_TYPE_UNSPECIFIED = 0;</code>
     */
    const BACKUP_TYPE_UNSPECIFIED = 0;
    /**
     * The default type for Cloud Bigtable managed backups. Supported for
     * backups created in both HDD and SSD instances. Requires optimization when
     * restored to a table in an SSD instance.
     *
     * Generated from protobuf enum <code>STANDARD = 1;</code>
     */
    const STANDARD = 1;
    /**
     * A backup type with faster restore to SSD performance. Only supported for
     * backups created in SSD instances. A new SSD table restored from a hot
     * backup reaches production performance more quickly than a standard
     * backup.
     *
     * Generated from protobuf enum <code>HOT = 2;</code>
     */
    const HOT = 2;

    private static $valueToName = [
        self::BACKUP_TYPE_UNSPECIFIED => 'BACKUP_TYPE_UNSPECIFIED',
        self::STANDARD => 'STANDARD',
        self::HOT => 'HOT',
    ];

    public static function name($value)
    {
        if (!isset(self::$valueToName[$value])) {
            throw new UnexpectedValueException(sprintf(
                    'Enum %s has no name defined for value %s', __CLASS__, $value));
        }
        return self::$valueToName[$value];
    }


    public static function value($name)
    {
        $const = __CLASS__ . '::' . strtoupper($name);
        if (!defined($const)) {
            throw new UnexpectedValueException(sprintf(
                    'Enum %s has no value defined for name %s', __CLASS__, $name));
        }
        return constant($const);
    }
}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(BackupType::class, \Google\Cloud\Bigtable\Admin\V2\Backup_BackupType::class);

