<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/bigtable/admin/v2/types.proto

namespace Google\Cloud\Bigtable\Admin\V2\Type\Struct\Encoding;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Fields are encoded independently and concatenated with a configurable
 * `delimiter` in between.
 * A struct with no fields defined is encoded as a single `delimiter`.
 * Sorted mode:
 *  - Fields are encoded in sorted mode.
 *  - Encoded field values must not contain any bytes <= `delimiter[0]`
 *  - Element-wise order is preserved: `A < B` if `A[0] < B[0]`, or if
 *    `A[0] == B[0] && A[1] < B[1]`, etc. Strict prefixes sort first.
 * Distinct mode:
 *  - Fields are encoded in distinct mode.
 *  - Encoded field values must not contain `delimiter[0]`.
 *
 * Generated from protobuf message <code>google.bigtable.admin.v2.Type.Struct.Encoding.DelimitedBytes</code>
 */
class DelimitedBytes extends \Google\Protobuf\Internal\Message
{
    /**
     * Byte sequence used to delimit concatenated fields. The delimiter must
     * contain at least 1 character and at most 50 characters.
     *
     * Generated from protobuf field <code>bytes delimiter = 1;</code>
     */
    protected $delimiter = '';

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $delimiter
     *           Byte sequence used to delimit concatenated fields. The delimiter must
     *           contain at least 1 character and at most 50 characters.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Bigtable\Admin\V2\Types::initOnce();
        parent::__construct($data);
    }

    /**
     * Byte sequence used to delimit concatenated fields. The delimiter must
     * contain at least 1 character and at most 50 characters.
     *
     * Generated from protobuf field <code>bytes delimiter = 1;</code>
     * @return string
     */
    public function getDelimiter()
    {
        return $this->delimiter;
    }

    /**
     * Byte sequence used to delimit concatenated fields. The delimiter must
     * contain at least 1 character and at most 50 characters.
     *
     * Generated from protobuf field <code>bytes delimiter = 1;</code>
     * @param string $var
     * @return $this
     */
    public function setDelimiter($var)
    {
        GPBUtil::checkString($var, False);
        $this->delimiter = $var;

        return $this;
    }

}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(DelimitedBytes::class, \Google\Cloud\Bigtable\Admin\V2\Type_Struct_Encoding_DelimitedBytes::class);

