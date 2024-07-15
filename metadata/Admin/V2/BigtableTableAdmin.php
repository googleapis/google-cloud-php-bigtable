<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/bigtable/admin/v2/bigtable_table_admin.proto

namespace GPBMetadata\Google\Bigtable\Admin\V2;

class BigtableTableAdmin
{
    public static $is_initialized = false;

    public static function initOnce() {
        $pool = \Google\Protobuf\Internal\DescriptorPool::getGeneratedPool();

        if (static::$is_initialized == true) {
          return;
        }
        \GPBMetadata\Google\Api\Annotations::initOnce();
        \GPBMetadata\Google\Api\Client::initOnce();
        \GPBMetadata\Google\Api\FieldBehavior::initOnce();
        \GPBMetadata\Google\Api\Resource::initOnce();
        \GPBMetadata\Google\Bigtable\Admin\V2\Common::initOnce();
        \GPBMetadata\Google\Bigtable\Admin\V2\Table::initOnce();
        \GPBMetadata\Google\Iam\V1\IamPolicy::initOnce();
        \GPBMetadata\Google\Iam\V1\Policy::initOnce();
        \GPBMetadata\Google\Longrunning\Operations::initOnce();
        \GPBMetadata\Google\Protobuf\Duration::initOnce();
        \GPBMetadata\Google\Protobuf\GPBEmpty::initOnce();
        \GPBMetadata\Google\Protobuf\FieldMask::initOnce();
        \GPBMetadata\Google\Protobuf\Timestamp::initOnce();
        $pool->internalAddGeneratedFile(
            '
�o
3google/bigtable/admin/v2/bigtable_table_admin.protogoogle.bigtable.admin.v2google/api/client.protogoogle/api/field_behavior.protogoogle/api/resource.proto%google/bigtable/admin/v2/common.proto$google/bigtable/admin/v2/table.protogoogle/iam/v1/iam_policy.protogoogle/iam/v1/policy.proto#google/longrunning/operations.protogoogle/protobuf/duration.protogoogle/protobuf/empty.proto google/protobuf/field_mask.protogoogle/protobuf/timestamp.proto"�
RestoreTableRequest=
parent (	B-�A�A\'
%bigtableadmin.googleapis.com/Instance
table_id (	B�A:
backup (	B(�A%
#bigtableadmin.googleapis.com/BackupH B
source"�
RestoreTableMetadata
name (	@
source_type (2+.google.bigtable.admin.v2.RestoreSourceType;
backup_info (2$.google.bigtable.admin.v2.BackupInfoH %
optimize_table_operation_name (	=
progress (2+.google.bigtable.admin.v2.OperationProgressB
source_info"l
OptimizeRestoredTableMetadata
name (	=
progress (2+.google.bigtable.admin.v2.OperationProgress"�
CreateTableRequest=
parent (	B-�A�A\'
%bigtableadmin.googleapis.com/Instance
table_id (	B�A3
table (2.google.bigtable.admin.v2.TableB�AJ
initial_splits (22.google.bigtable.admin.v2.CreateTableRequest.Split
Split
key ("�
CreateTableFromSnapshotRequest=
parent (	B-�A�A\'
%bigtableadmin.googleapis.com/Instance
table_id (	B�AF
source_snapshot (	B-�A�A\'
%bigtableadmin.googleapis.com/Snapshot"�
DropRowRangeRequest8
name (	B*�A�A$
"bigtableadmin.googleapis.com/Table
row_key_prefix (H $
delete_all_data_from_table (H B
target"�
ListTablesRequest=
parent (	B-�A�A\'
%bigtableadmin.googleapis.com/Instance2
view (2$.google.bigtable.admin.v2.Table.View
	page_size (

page_token (	"^
ListTablesResponse/
tables (2.google.bigtable.admin.v2.Table
next_page_token (	"
GetTableRequest8
name (	B*�A�A$
"bigtableadmin.googleapis.com/Table2
view (2$.google.bigtable.admin.v2.Table.View"
UpdateTableRequest3
table (2.google.bigtable.admin.v2.TableB�A4
update_mask (2.google.protobuf.FieldMaskB�A"�
UpdateTableMetadata
name (	.

start_time (2.google.protobuf.Timestamp,
end_time (2.google.protobuf.Timestamp"N
DeleteTableRequest8
name (	B*�A�A$
"bigtableadmin.googleapis.com/Table"P
UndeleteTableRequest8
name (	B*�A�A$
"bigtableadmin.googleapis.com/Table"�
UndeleteTableMetadata
name (	.

start_time (2.google.protobuf.Timestamp,
end_time (2.google.protobuf.Timestamp"�
ModifyColumnFamiliesRequest8
name (	B*�A�A$
"bigtableadmin.googleapis.com/Table^
modifications (2B.google.bigtable.admin.v2.ModifyColumnFamiliesRequest.ModificationB�A
ignore_warnings (B�A�
Modification

id (	8
create (2&.google.bigtable.admin.v2.ColumnFamilyH 8
update (2&.google.bigtable.admin.v2.ColumnFamilyH 
drop (H 4
update_mask (2.google.protobuf.FieldMaskB�AB
mod"[
GenerateConsistencyTokenRequest8
name (	B*�A�A$
"bigtableadmin.googleapis.com/Table"=
 GenerateConsistencyTokenResponse
consistency_token (	"�
CheckConsistencyRequest8
name (	B*�A�A$
"bigtableadmin.googleapis.com/Table
consistency_token (	B�AY
standard_read_remote_writes (22.google.bigtable.admin.v2.StandardReadRemoteWritesH Z
data_boost_read_local_writes (22.google.bigtable.admin.v2.DataBoostReadLocalWritesH B
mode"
StandardReadRemoteWrites"
DataBoostReadLocalWrites".
CheckConsistencyResponse

consistent ("�
SnapshotTableRequest8
name (	B*�A�A$
"bigtableadmin.googleapis.com/Table=
cluster (	B,�A�A&
$bigtableadmin.googleapis.com/Cluster
snapshot_id (	B�A&
ttl (2.google.protobuf.Duration
description (	"Q
GetSnapshotRequest;
name (	B-�A�A\'
%bigtableadmin.googleapis.com/Snapshot"{
ListSnapshotsRequest<
parent (	B,�A�A&
$bigtableadmin.googleapis.com/Cluster
	page_size (

page_token (	"g
ListSnapshotsResponse5
	snapshots (2".google.bigtable.admin.v2.Snapshot
next_page_token (	"T
DeleteSnapshotRequest;
name (	B-�A�A\'
%bigtableadmin.googleapis.com/Snapshot"�
SnapshotTableMetadataH
original_request (2..google.bigtable.admin.v2.SnapshotTableRequest0
request_time (2.google.protobuf.Timestamp/
finish_time (2.google.protobuf.Timestamp"�
CreateTableFromSnapshotMetadataR
original_request (28.google.bigtable.admin.v2.CreateTableFromSnapshotRequest0
request_time (2.google.protobuf.Timestamp/
finish_time (2.google.protobuf.Timestamp"�
CreateBackupRequest<
parent (	B,�A�A&
$bigtableadmin.googleapis.com/Cluster
	backup_id (	B�A5
backup (2 .google.bigtable.admin.v2.BackupB�A"�
CreateBackupMetadata
name (	
source_table (	.

start_time (2.google.protobuf.Timestamp,
end_time (2.google.protobuf.Timestamp"�
UpdateBackupRequest5
backup (2 .google.bigtable.admin.v2.BackupB�A4
update_mask (2.google.protobuf.FieldMaskB�A"M
GetBackupRequest9
name (	B+�A�A%
#bigtableadmin.googleapis.com/Backup"P
DeleteBackupRequest9
name (	B+�A�A%
#bigtableadmin.googleapis.com/Backup"�
ListBackupsRequest<
parent (	B,�A�A&
$bigtableadmin.googleapis.com/Cluster
filter (	
order_by (	
	page_size (

page_token (	"a
ListBackupsResponse1
backups (2 .google.bigtable.admin.v2.Backup
next_page_token (	"�
CopyBackupRequest<
parent (	B,�A�A&
$bigtableadmin.googleapis.com/Cluster
	backup_id (	B�AB
source_backup (	B+�A�A%
#bigtableadmin.googleapis.com/Backup4
expire_time (2.google.protobuf.TimestampB�A"�
CopyBackupMetadata6
name (	B(�A%
#bigtableadmin.googleapis.com/Backup@
source_backup_info (2$.google.bigtable.admin.v2.BackupInfo=
progress (2+.google.bigtable.admin.v2.OperationProgress"�
CreateAuthorizedViewRequestC
parent (	B3�A�A-+bigtableadmin.googleapis.com/AuthorizedView
authorized_view_id (	B�AF
authorized_view (2(.google.bigtable.admin.v2.AuthorizedViewB�A"�
CreateAuthorizedViewMetadataO
original_request (25.google.bigtable.admin.v2.CreateAuthorizedViewRequest0
request_time (2.google.protobuf.Timestamp/
finish_time (2.google.protobuf.Timestamp"�
ListAuthorizedViewsRequestC
parent (	B3�A�A-+bigtableadmin.googleapis.com/AuthorizedView
	page_size (B�A

page_token (	B�AH
view (25.google.bigtable.admin.v2.AuthorizedView.ResponseViewB�A"z
ListAuthorizedViewsResponseB
authorized_views (2(.google.bigtable.admin.v2.AuthorizedView
next_page_token (	"�
GetAuthorizedViewRequestA
name (	B3�A�A-
+bigtableadmin.googleapis.com/AuthorizedViewH
view (25.google.bigtable.admin.v2.AuthorizedView.ResponseViewB�A"�
UpdateAuthorizedViewRequestF
authorized_view (2(.google.bigtable.admin.v2.AuthorizedViewB�A4
update_mask (2.google.protobuf.FieldMaskB�A
ignore_warnings (B�A"�
UpdateAuthorizedViewMetadataO
original_request (25.google.bigtable.admin.v2.UpdateAuthorizedViewRequest0
request_time (2.google.protobuf.Timestamp/
finish_time (2.google.protobuf.Timestamp"s
DeleteAuthorizedViewRequestA
name (	B3�A�A-
+bigtableadmin.googleapis.com/AuthorizedView
etag (	B�A2�3
BigtableTableAdmin�
CreateTable,.google.bigtable.admin.v2.CreateTableRequest.google.bigtable.admin.v2.Table"M�Aparent,table_id,table���/"*/v2/{parent=projects/*/instances/*}/tables:*�
CreateTableFromSnapshot8.google.bigtable.admin.v2.CreateTableFromSnapshotRequest.google.longrunning.Operation"��A(
TableCreateTableFromSnapshotMetadata�Aparent,table_id,source_snapshot���B"=/v2/{parent=projects/*/instances/*}/tables:createFromSnapshot:*�

ListTables+.google.bigtable.admin.v2.ListTablesRequest,.google.bigtable.admin.v2.ListTablesResponse";�Aparent���,*/v2/{parent=projects/*/instances/*}/tables�
GetTable).google.bigtable.admin.v2.GetTableRequest.google.bigtable.admin.v2.Table"9�Aname���,*/v2/{name=projects/*/instances/*/tables/*}�
UpdateTable,.google.bigtable.admin.v2.UpdateTableRequest.google.longrunning.Operation"r�A
TableUpdateTableMetadata�Atable,update_mask���920/v2/{table.name=projects/*/instances/*/tables/*}:table�
DeleteTable,.google.bigtable.admin.v2.DeleteTableRequest.google.protobuf.Empty"9�Aname���,**/v2/{name=projects/*/instances/*/tables/*}�
UndeleteTable..google.bigtable.admin.v2.UndeleteTableRequest.google.longrunning.Operation"f�A
TableUndeleteTableMetadata�Aname���8"3/v2/{name=projects/*/instances/*/tables/*}:undelete:*�
CreateAuthorizedView5.google.bigtable.admin.v2.CreateAuthorizedViewRequest.google.longrunning.Operation"��A.
AuthorizedViewCreateAuthorizedViewMetadata�A)parent,authorized_view,authorized_view_id���O"</v2/{parent=projects/*/instances/*/tables/*}/authorizedViews:authorized_view�
ListAuthorizedViews4.google.bigtable.admin.v2.ListAuthorizedViewsRequest5.google.bigtable.admin.v2.ListAuthorizedViewsResponse"M�Aparent���></v2/{parent=projects/*/instances/*/tables/*}/authorizedViews�
GetAuthorizedView2.google.bigtable.admin.v2.GetAuthorizedViewRequest(.google.bigtable.admin.v2.AuthorizedView"K�Aname���></v2/{name=projects/*/instances/*/tables/*/authorizedViews/*}�
UpdateAuthorizedView5.google.bigtable.admin.v2.UpdateAuthorizedViewRequest.google.longrunning.Operation"��A.
AuthorizedViewUpdateAuthorizedViewMetadata�Aauthorized_view,update_mask���_2L/v2/{authorized_view.name=projects/*/instances/*/tables/*/authorizedViews/*}:authorized_view�
DeleteAuthorizedView5.google.bigtable.admin.v2.DeleteAuthorizedViewRequest.google.protobuf.Empty"K�Aname���>*</v2/{name=projects/*/instances/*/tables/*/authorizedViews/*}�
ModifyColumnFamilies5.google.bigtable.admin.v2.ModifyColumnFamiliesRequest.google.bigtable.admin.v2.Table"_�Aname,modifications���D"?/v2/{name=projects/*/instances/*/tables/*}:modifyColumnFamilies:*�
DropRowRange-.google.bigtable.admin.v2.DropRowRangeRequest.google.protobuf.Empty"B���<"7/v2/{name=projects/*/instances/*/tables/*}:dropRowRange:*�
GenerateConsistencyToken9.google.bigtable.admin.v2.GenerateConsistencyTokenRequest:.google.bigtable.admin.v2.GenerateConsistencyTokenResponse"U�Aname���H"C/v2/{name=projects/*/instances/*/tables/*}:generateConsistencyToken:*�
CheckConsistency1.google.bigtable.admin.v2.CheckConsistencyRequest2.google.bigtable.admin.v2.CheckConsistencyResponse"_�Aname,consistency_token���@";/v2/{name=projects/*/instances/*/tables/*}:checkConsistency:*�
SnapshotTable..google.bigtable.admin.v2.SnapshotTableRequest.google.longrunning.Operation"��A!
SnapshotSnapshotTableMetadata�A$name,cluster,snapshot_id,description���8"3/v2/{name=projects/*/instances/*/tables/*}:snapshot:*�
GetSnapshot,.google.bigtable.admin.v2.GetSnapshotRequest".google.bigtable.admin.v2.Snapshot"G�Aname���:8/v2/{name=projects/*/instances/*/clusters/*/snapshots/*}�
ListSnapshots..google.bigtable.admin.v2.ListSnapshotsRequest/.google.bigtable.admin.v2.ListSnapshotsResponse"I�Aparent���:8/v2/{parent=projects/*/instances/*/clusters/*}/snapshots�
DeleteSnapshot/.google.bigtable.admin.v2.DeleteSnapshotRequest.google.protobuf.Empty"G�Aname���:*8/v2/{name=projects/*/instances/*/clusters/*/snapshots/*}�
CreateBackup-.google.bigtable.admin.v2.CreateBackupRequest.google.longrunning.Operation"��A
BackupCreateBackupMetadata�Aparent,backup_id,backup���@"6/v2/{parent=projects/*/instances/*/clusters/*}/backups:backup�
	GetBackup*.google.bigtable.admin.v2.GetBackupRequest .google.bigtable.admin.v2.Backup"E�Aname���86/v2/{name=projects/*/instances/*/clusters/*/backups/*}�
UpdateBackup-.google.bigtable.admin.v2.UpdateBackupRequest .google.bigtable.admin.v2.Backup"b�Abackup,update_mask���G2=/v2/{backup.name=projects/*/instances/*/clusters/*/backups/*}:backup�
DeleteBackup-.google.bigtable.admin.v2.DeleteBackupRequest.google.protobuf.Empty"E�Aname���8*6/v2/{name=projects/*/instances/*/clusters/*/backups/*}�
ListBackups,.google.bigtable.admin.v2.ListBackupsRequest-.google.bigtable.admin.v2.ListBackupsResponse"G�Aparent���86/v2/{parent=projects/*/instances/*/clusters/*}/backups�
RestoreTable-.google.bigtable.admin.v2.RestoreTableRequest.google.longrunning.Operation"]�A
TableRestoreTableMetadata���7"2/v2/{parent=projects/*/instances/*}/tables:restore:*�

CopyBackup+.google.bigtable.admin.v2.CopyBackupRequest.google.longrunning.Operation"��A
BackupCopyBackupMetadata�A*parent,backup_id,source_backup,expire_time���@";/v2/{parent=projects/*/instances/*/clusters/*}/backups:copy:*�
GetIamPolicy".google.iam.v1.GetIamPolicyRequest.google.iam.v1.Policy"��Aresource����";/v2/{resource=projects/*/instances/*/tables/*}:getIamPolicy:*ZL"G/v2/{resource=projects/*/instances/*/clusters/*/backups/*}:getIamPolicy:*�
SetIamPolicy".google.iam.v1.SetIamPolicyRequest.google.iam.v1.Policy"��Aresource,policy����";/v2/{resource=projects/*/instances/*/tables/*}:setIamPolicy:*ZL"G/v2/{resource=projects/*/instances/*/clusters/*/backups/*}:setIamPolicy:*�
TestIamPermissions(.google.iam.v1.TestIamPermissionsRequest).google.iam.v1.TestIamPermissionsResponse"��Aresource,permissions����"A/v2/{resource=projects/*/instances/*/tables/*}:testIamPermissions:*ZR"M/v2/{resource=projects/*/instances/*/clusters/*/backups/*}:testIamPermissions:*��Abigtableadmin.googleapis.com�A�https://www.googleapis.com/auth/bigtable.admin,https://www.googleapis.com/auth/bigtable.admin.table,https://www.googleapis.com/auth/cloud-bigtable.admin,https://www.googleapis.com/auth/cloud-bigtable.admin.table,https://www.googleapis.com/auth/cloud-platform,https://www.googleapis.com/auth/cloud-platform.read-onlyB�
com.google.bigtable.admin.v2BBigtableTableAdminProtoPZ8cloud.google.com/go/bigtable/admin/apiv2/adminpb;adminpb�Google.Cloud.Bigtable.Admin.V2�Google\\Cloud\\Bigtable\\Admin\\V2�"Google::Cloud::Bigtable::Admin::V2bproto3'
        , true);

        static::$is_initialized = true;
    }
}

