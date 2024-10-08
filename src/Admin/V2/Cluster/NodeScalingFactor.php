<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/bigtable/admin/v2/instance.proto

namespace Google\Cloud\Bigtable\Admin\V2\Cluster;

use UnexpectedValueException;

/**
 * Possible node scaling factors of the clusters. Node scaling delivers better
 * latency and more throughput by removing node boundaries.
 *
 * Protobuf type <code>google.bigtable.admin.v2.Cluster.NodeScalingFactor</code>
 */
class NodeScalingFactor
{
    /**
     * No node scaling specified. Defaults to NODE_SCALING_FACTOR_1X.
     *
     * Generated from protobuf enum <code>NODE_SCALING_FACTOR_UNSPECIFIED = 0;</code>
     */
    const NODE_SCALING_FACTOR_UNSPECIFIED = 0;
    /**
     * The cluster is running with a scaling factor of 1.
     *
     * Generated from protobuf enum <code>NODE_SCALING_FACTOR_1X = 1;</code>
     */
    const NODE_SCALING_FACTOR_1X = 1;
    /**
     * The cluster is running with a scaling factor of 2.
     * All node count values must be in increments of 2 with this scaling factor
     * enabled, otherwise an INVALID_ARGUMENT error will be returned.
     *
     * Generated from protobuf enum <code>NODE_SCALING_FACTOR_2X = 2;</code>
     */
    const NODE_SCALING_FACTOR_2X = 2;

    private static $valueToName = [
        self::NODE_SCALING_FACTOR_UNSPECIFIED => 'NODE_SCALING_FACTOR_UNSPECIFIED',
        self::NODE_SCALING_FACTOR_1X => 'NODE_SCALING_FACTOR_1X',
        self::NODE_SCALING_FACTOR_2X => 'NODE_SCALING_FACTOR_2X',
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
class_alias(NodeScalingFactor::class, \Google\Cloud\Bigtable\Admin\V2\Cluster_NodeScalingFactor::class);

