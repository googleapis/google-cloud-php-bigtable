<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/bigtable/v2/bigtable.proto

namespace Google\Cloud\Bigtable\V2;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Response message for Bigtable.PrepareQueryResponse
 *
 * Generated from protobuf message <code>google.bigtable.v2.PrepareQueryResponse</code>
 */
class PrepareQueryResponse extends \Google\Protobuf\Internal\Message
{
    /**
     * Structure of rows in the response stream of `ExecuteQueryResponse` for the
     * returned `prepared_query`.
     *
     * Generated from protobuf field <code>.google.bigtable.v2.ResultSetMetadata metadata = 1;</code>
     */
    protected $metadata = null;
    /**
     * A serialized prepared query. Clients should treat this as an opaque
     * blob of bytes to send in `ExecuteQueryRequest`.
     *
     * Generated from protobuf field <code>bytes prepared_query = 2;</code>
     */
    protected $prepared_query = '';
    /**
     * The time at which the prepared query token becomes invalid.
     * A token may become invalid early due to changes in the data being read, but
     * it provides a guideline to refresh query plans asynchronously.
     *
     * Generated from protobuf field <code>.google.protobuf.Timestamp valid_until = 3;</code>
     */
    protected $valid_until = null;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type \Google\Cloud\Bigtable\V2\ResultSetMetadata $metadata
     *           Structure of rows in the response stream of `ExecuteQueryResponse` for the
     *           returned `prepared_query`.
     *     @type string $prepared_query
     *           A serialized prepared query. Clients should treat this as an opaque
     *           blob of bytes to send in `ExecuteQueryRequest`.
     *     @type \Google\Protobuf\Timestamp $valid_until
     *           The time at which the prepared query token becomes invalid.
     *           A token may become invalid early due to changes in the data being read, but
     *           it provides a guideline to refresh query plans asynchronously.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Bigtable\V2\Bigtable::initOnce();
        parent::__construct($data);
    }

    /**
     * Structure of rows in the response stream of `ExecuteQueryResponse` for the
     * returned `prepared_query`.
     *
     * Generated from protobuf field <code>.google.bigtable.v2.ResultSetMetadata metadata = 1;</code>
     * @return \Google\Cloud\Bigtable\V2\ResultSetMetadata|null
     */
    public function getMetadata()
    {
        return $this->metadata;
    }

    public function hasMetadata()
    {
        return isset($this->metadata);
    }

    public function clearMetadata()
    {
        unset($this->metadata);
    }

    /**
     * Structure of rows in the response stream of `ExecuteQueryResponse` for the
     * returned `prepared_query`.
     *
     * Generated from protobuf field <code>.google.bigtable.v2.ResultSetMetadata metadata = 1;</code>
     * @param \Google\Cloud\Bigtable\V2\ResultSetMetadata $var
     * @return $this
     */
    public function setMetadata($var)
    {
        GPBUtil::checkMessage($var, \Google\Cloud\Bigtable\V2\ResultSetMetadata::class);
        $this->metadata = $var;

        return $this;
    }

    /**
     * A serialized prepared query. Clients should treat this as an opaque
     * blob of bytes to send in `ExecuteQueryRequest`.
     *
     * Generated from protobuf field <code>bytes prepared_query = 2;</code>
     * @return string
     */
    public function getPreparedQuery()
    {
        return $this->prepared_query;
    }

    /**
     * A serialized prepared query. Clients should treat this as an opaque
     * blob of bytes to send in `ExecuteQueryRequest`.
     *
     * Generated from protobuf field <code>bytes prepared_query = 2;</code>
     * @param string $var
     * @return $this
     */
    public function setPreparedQuery($var)
    {
        GPBUtil::checkString($var, False);
        $this->prepared_query = $var;

        return $this;
    }

    /**
     * The time at which the prepared query token becomes invalid.
     * A token may become invalid early due to changes in the data being read, but
     * it provides a guideline to refresh query plans asynchronously.
     *
     * Generated from protobuf field <code>.google.protobuf.Timestamp valid_until = 3;</code>
     * @return \Google\Protobuf\Timestamp|null
     */
    public function getValidUntil()
    {
        return $this->valid_until;
    }

    public function hasValidUntil()
    {
        return isset($this->valid_until);
    }

    public function clearValidUntil()
    {
        unset($this->valid_until);
    }

    /**
     * The time at which the prepared query token becomes invalid.
     * A token may become invalid early due to changes in the data being read, but
     * it provides a guideline to refresh query plans asynchronously.
     *
     * Generated from protobuf field <code>.google.protobuf.Timestamp valid_until = 3;</code>
     * @param \Google\Protobuf\Timestamp $var
     * @return $this
     */
    public function setValidUntil($var)
    {
        GPBUtil::checkMessage($var, \Google\Protobuf\Timestamp::class);
        $this->valid_until = $var;

        return $this;
    }

}

