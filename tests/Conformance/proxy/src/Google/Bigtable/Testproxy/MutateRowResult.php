<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# NO CHECKED-IN PROTOBUF GENCODE
# source: google/bigtable/testproxy/test_proxy.proto

namespace Google\Bigtable\Testproxy;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Response from test proxy service for MutateRowRequest.
 *
 * Generated from protobuf message <code>google.bigtable.testproxy.MutateRowResult</code>
 */
class MutateRowResult extends \Google\Protobuf\Internal\Message
{
    /**
     * The RPC status from the client binding.
     *
     * Generated from protobuf field <code>.google.rpc.Status status = 1;</code>
     */
    protected $status = null;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type \Google\Rpc\Status $status
     *           The RPC status from the client binding.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Bigtable\Testproxy\TestProxy::initOnce();
        parent::__construct($data);
    }

    /**
     * The RPC status from the client binding.
     *
     * Generated from protobuf field <code>.google.rpc.Status status = 1;</code>
     * @return \Google\Rpc\Status|null
     */
    public function getStatus()
    {
        return $this->status;
    }

    public function hasStatus()
    {
        return isset($this->status);
    }

    public function clearStatus()
    {
        unset($this->status);
    }

    /**
     * The RPC status from the client binding.
     *
     * Generated from protobuf field <code>.google.rpc.Status status = 1;</code>
     * @param \Google\Rpc\Status $var
     * @return $this
     */
    public function setStatus($var)
    {
        GPBUtil::checkMessage($var, \Google\Rpc\Status::class);
        $this->status = $var;

        return $this;
    }

}

