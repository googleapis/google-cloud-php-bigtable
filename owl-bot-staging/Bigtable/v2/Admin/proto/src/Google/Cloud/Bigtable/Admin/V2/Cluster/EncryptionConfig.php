<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/bigtable/admin/v2/instance.proto

namespace Google\Cloud\Bigtable\Admin\V2\Cluster;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Cloud Key Management Service (Cloud KMS) settings for a CMEK-protected
 * cluster.
 *
 * Generated from protobuf message <code>google.bigtable.admin.v2.Cluster.EncryptionConfig</code>
 */
class EncryptionConfig extends \Google\Protobuf\Internal\Message
{
    /**
     * Describes the Cloud KMS encryption key that will be used to protect the
     * destination Bigtable cluster. The requirements for this key are:
     *  1) The Cloud Bigtable service account associated with the project that
     *  contains this cluster must be granted the
     *  `cloudkms.cryptoKeyEncrypterDecrypter` role on the CMEK key.
     *  2) Only regional keys can be used and the region of the CMEK key must
     *  match the region of the cluster.
     * 3) All clusters within an instance must use the same CMEK key.
     *
     * Generated from protobuf field <code>string kms_key_name = 1 [(.google.api.resource_reference) = {</code>
     */
    protected $kms_key_name = '';

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $kms_key_name
     *           Describes the Cloud KMS encryption key that will be used to protect the
     *           destination Bigtable cluster. The requirements for this key are:
     *            1) The Cloud Bigtable service account associated with the project that
     *            contains this cluster must be granted the
     *            `cloudkms.cryptoKeyEncrypterDecrypter` role on the CMEK key.
     *            2) Only regional keys can be used and the region of the CMEK key must
     *            match the region of the cluster.
     *           3) All clusters within an instance must use the same CMEK key.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Bigtable\Admin\V2\Instance::initOnce();
        parent::__construct($data);
    }

    /**
     * Describes the Cloud KMS encryption key that will be used to protect the
     * destination Bigtable cluster. The requirements for this key are:
     *  1) The Cloud Bigtable service account associated with the project that
     *  contains this cluster must be granted the
     *  `cloudkms.cryptoKeyEncrypterDecrypter` role on the CMEK key.
     *  2) Only regional keys can be used and the region of the CMEK key must
     *  match the region of the cluster.
     * 3) All clusters within an instance must use the same CMEK key.
     *
     * Generated from protobuf field <code>string kms_key_name = 1 [(.google.api.resource_reference) = {</code>
     * @return string
     */
    public function getKmsKeyName()
    {
        return $this->kms_key_name;
    }

    /**
     * Describes the Cloud KMS encryption key that will be used to protect the
     * destination Bigtable cluster. The requirements for this key are:
     *  1) The Cloud Bigtable service account associated with the project that
     *  contains this cluster must be granted the
     *  `cloudkms.cryptoKeyEncrypterDecrypter` role on the CMEK key.
     *  2) Only regional keys can be used and the region of the CMEK key must
     *  match the region of the cluster.
     * 3) All clusters within an instance must use the same CMEK key.
     *
     * Generated from protobuf field <code>string kms_key_name = 1 [(.google.api.resource_reference) = {</code>
     * @param string $var
     * @return $this
     */
    public function setKmsKeyName($var)
    {
        GPBUtil::checkString($var, True);
        $this->kms_key_name = $var;

        return $this;
    }

}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(EncryptionConfig::class, \Google\Cloud\Bigtable\Admin\V2\Cluster_EncryptionConfig::class);

