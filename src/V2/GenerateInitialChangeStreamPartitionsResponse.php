<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/bigtable/v2/bigtable.proto

namespace Google\Cloud\Bigtable\V2;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * NOTE: This API is intended to be used by Apache Beam BigtableIO.
 * Response message for Bigtable.GenerateInitialChangeStreamPartitions.
 *
 * Generated from protobuf message <code>google.bigtable.v2.GenerateInitialChangeStreamPartitionsResponse</code>
 */
class GenerateInitialChangeStreamPartitionsResponse extends \Google\Protobuf\Internal\Message
{
    /**
     * A partition of the change stream.
     *
     * Generated from protobuf field <code>.google.bigtable.v2.StreamPartition partition = 1;</code>
     */
    protected $partition = null;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type \Google\Cloud\Bigtable\V2\StreamPartition $partition
     *           A partition of the change stream.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Bigtable\V2\Bigtable::initOnce();
        parent::__construct($data);
    }

    /**
     * A partition of the change stream.
     *
     * Generated from protobuf field <code>.google.bigtable.v2.StreamPartition partition = 1;</code>
     * @return \Google\Cloud\Bigtable\V2\StreamPartition|null
     */
    public function getPartition()
    {
        return $this->partition;
    }

    public function hasPartition()
    {
        return isset($this->partition);
    }

    public function clearPartition()
    {
        unset($this->partition);
    }

    /**
     * A partition of the change stream.
     *
     * Generated from protobuf field <code>.google.bigtable.v2.StreamPartition partition = 1;</code>
     * @param \Google\Cloud\Bigtable\V2\StreamPartition $var
     * @return $this
     */
    public function setPartition($var)
    {
        GPBUtil::checkMessage($var, \Google\Cloud\Bigtable\V2\StreamPartition::class);
        $this->partition = $var;

        return $this;
    }

}

