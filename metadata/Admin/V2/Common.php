<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/bigtable/admin/v2/common.proto

namespace GPBMetadata\Google\Bigtable\Admin\V2;

class Common
{
    public static $is_initialized = false;

    public static function initOnce() {
        $pool = \Google\Protobuf\Internal\DescriptorPool::getGeneratedPool();

        if (static::$is_initialized == true) {
          return;
        }
        \GPBMetadata\Google\Api\Annotations::initOnce();
        \GPBMetadata\Google\Protobuf\Timestamp::initOnce();
        $pool->internalAddGeneratedFile(
            '
�
%google/bigtable/admin/v2/common.protogoogle.bigtable.admin.v2google/protobuf/timestamp.proto"�
OperationProgress
progress_percent (.

start_time (2.google.protobuf.Timestamp,
end_time (2.google.protobuf.Timestamp*=
StorageType
STORAGE_TYPE_UNSPECIFIED 
SSD
HDDB�
com.google.bigtable.admin.v2BCommonProtoPZ=google.golang.org/genproto/googleapis/bigtable/admin/v2;admin�Google.Cloud.Bigtable.Admin.V2�Google\\Cloud\\Bigtable\\Admin\\V2�"Google::Cloud::Bigtable::Admin::V2bproto3'
        , true);

        static::$is_initialized = true;
    }
}

