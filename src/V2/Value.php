<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/bigtable/v2/data.proto

namespace Google\Cloud\Bigtable\V2;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * `Value` represents a dynamically typed value.
 * The typed fields in `Value` are used as a transport encoding for the actual
 * value (which may be of a more complex type). See the documentation of the
 * `Type` message for more details.
 *
 * Generated from protobuf message <code>google.bigtable.v2.Value</code>
 */
class Value extends \Google\Protobuf\Internal\Message
{
    protected $kind;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $raw_value
     *           Represents a raw byte sequence with no type information.
     *           The `type` field must be omitted.
     *     @type int|string $raw_timestamp_micros
     *           Represents a raw cell timestamp with no type information.
     *           The `type` field must be omitted.
     *     @type int|string $int_value
     *           Represents a typed value transported as an integer.
     *           Default type for writes: `Int64`
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Bigtable\V2\Data::initOnce();
        parent::__construct($data);
    }

    /**
     * Represents a raw byte sequence with no type information.
     * The `type` field must be omitted.
     *
     * Generated from protobuf field <code>bytes raw_value = 8;</code>
     * @return string
     */
    public function getRawValue()
    {
        return $this->readOneof(8);
    }

    public function hasRawValue()
    {
        return $this->hasOneof(8);
    }

    /**
     * Represents a raw byte sequence with no type information.
     * The `type` field must be omitted.
     *
     * Generated from protobuf field <code>bytes raw_value = 8;</code>
     * @param string $var
     * @return $this
     */
    public function setRawValue($var)
    {
        GPBUtil::checkString($var, False);
        $this->writeOneof(8, $var);

        return $this;
    }

    /**
     * Represents a raw cell timestamp with no type information.
     * The `type` field must be omitted.
     *
     * Generated from protobuf field <code>int64 raw_timestamp_micros = 9;</code>
     * @return int|string
     */
    public function getRawTimestampMicros()
    {
        return $this->readOneof(9);
    }

    public function hasRawTimestampMicros()
    {
        return $this->hasOneof(9);
    }

    /**
     * Represents a raw cell timestamp with no type information.
     * The `type` field must be omitted.
     *
     * Generated from protobuf field <code>int64 raw_timestamp_micros = 9;</code>
     * @param int|string $var
     * @return $this
     */
    public function setRawTimestampMicros($var)
    {
        GPBUtil::checkInt64($var);
        $this->writeOneof(9, $var);

        return $this;
    }

    /**
     * Represents a typed value transported as an integer.
     * Default type for writes: `Int64`
     *
     * Generated from protobuf field <code>int64 int_value = 6;</code>
     * @return int|string
     */
    public function getIntValue()
    {
        return $this->readOneof(6);
    }

    public function hasIntValue()
    {
        return $this->hasOneof(6);
    }

    /**
     * Represents a typed value transported as an integer.
     * Default type for writes: `Int64`
     *
     * Generated from protobuf field <code>int64 int_value = 6;</code>
     * @param int|string $var
     * @return $this
     */
    public function setIntValue($var)
    {
        GPBUtil::checkInt64($var);
        $this->writeOneof(6, $var);

        return $this;
    }

    /**
     * @return string
     */
    public function getKind()
    {
        return $this->whichOneof("kind");
    }

}

