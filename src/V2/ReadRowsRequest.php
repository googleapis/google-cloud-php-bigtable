<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/bigtable/v2/bigtable.proto

namespace Google\Cloud\Bigtable\V2;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Request message for Bigtable.ReadRows.
 *
 * Generated from protobuf message <code>google.bigtable.v2.ReadRowsRequest</code>
 */
class ReadRowsRequest extends \Google\Protobuf\Internal\Message
{
    /**
     * Optional. The unique name of the table from which to read.
     * Values are of the form
     * `projects/<project>/instances/<instance>/tables/<table>`.
     *
     * Generated from protobuf field <code>string table_name = 1 [(.google.api.field_behavior) = OPTIONAL, (.google.api.resource_reference) = {</code>
     */
    protected $table_name = '';
    /**
     * Optional. The unique name of the AuthorizedView from which to read.
     * Values are of the form
     * `projects/<project>/instances/<instance>/tables/<table>/authorizedViews/<authorized_view>`.
     *
     * Generated from protobuf field <code>string authorized_view_name = 9 [(.google.api.field_behavior) = OPTIONAL, (.google.api.resource_reference) = {</code>
     */
    protected $authorized_view_name = '';
    /**
     * This value specifies routing for replication. If not specified, the
     * "default" application profile will be used.
     *
     * Generated from protobuf field <code>string app_profile_id = 5;</code>
     */
    protected $app_profile_id = '';
    /**
     * The row keys and/or ranges to read sequentially. If not specified, reads
     * from all rows.
     *
     * Generated from protobuf field <code>.google.bigtable.v2.RowSet rows = 2;</code>
     */
    protected $rows = null;
    /**
     * The filter to apply to the contents of the specified row(s). If unset,
     * reads the entirety of each row.
     *
     * Generated from protobuf field <code>.google.bigtable.v2.RowFilter filter = 3;</code>
     */
    protected $filter = null;
    /**
     * The read will stop after committing to N rows' worth of results. The
     * default (zero) is to return all results.
     *
     * Generated from protobuf field <code>int64 rows_limit = 4;</code>
     */
    protected $rows_limit = 0;
    /**
     * The view into RequestStats, as described above.
     *
     * Generated from protobuf field <code>.google.bigtable.v2.ReadRowsRequest.RequestStatsView request_stats_view = 6;</code>
     */
    protected $request_stats_view = 0;
    /**
     * Experimental API - Please note that this API is currently experimental
     * and can change in the future.
     * Return rows in lexiographical descending order of the row keys. The row
     * contents will not be affected by this flag.
     * Example result set:
     *     [
     *       {key: "k2", "f:col1": "v1", "f:col2": "v1"},
     *       {key: "k1", "f:col1": "v2", "f:col2": "v2"}
     *     ]
     *
     * Generated from protobuf field <code>bool reversed = 7;</code>
     */
    protected $reversed = false;

    /**
     * @param string $tableName Optional. The unique name of the table from which to read.
     *
     *                          Values are of the form
     *                          `projects/<project>/instances/<instance>/tables/<table>`. Please see
     *                          {@see BigtableClient::tableName()} for help formatting this field.
     *
     * @return \Google\Cloud\Bigtable\V2\ReadRowsRequest
     *
     * @experimental
     */
    public static function build(string $tableName): self
    {
        return (new self())
            ->setTableName($tableName);
    }

    /**
     * @param string $tableName    Optional. The unique name of the table from which to read.
     *
     *                             Values are of the form
     *                             `projects/<project>/instances/<instance>/tables/<table>`. Please see
     *                             {@see BigtableClient::tableName()} for help formatting this field.
     * @param string $appProfileId This value specifies routing for replication. If not specified, the
     *                             "default" application profile will be used.
     *
     * @return \Google\Cloud\Bigtable\V2\ReadRowsRequest
     *
     * @experimental
     */
    public static function buildFromTableNameAppProfileId(string $tableName, string $appProfileId): self
    {
        return (new self())
            ->setTableName($tableName)
            ->setAppProfileId($appProfileId);
    }

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $table_name
     *           Optional. The unique name of the table from which to read.
     *           Values are of the form
     *           `projects/<project>/instances/<instance>/tables/<table>`.
     *     @type string $authorized_view_name
     *           Optional. The unique name of the AuthorizedView from which to read.
     *           Values are of the form
     *           `projects/<project>/instances/<instance>/tables/<table>/authorizedViews/<authorized_view>`.
     *     @type string $app_profile_id
     *           This value specifies routing for replication. If not specified, the
     *           "default" application profile will be used.
     *     @type \Google\Cloud\Bigtable\V2\RowSet $rows
     *           The row keys and/or ranges to read sequentially. If not specified, reads
     *           from all rows.
     *     @type \Google\Cloud\Bigtable\V2\RowFilter $filter
     *           The filter to apply to the contents of the specified row(s). If unset,
     *           reads the entirety of each row.
     *     @type int|string $rows_limit
     *           The read will stop after committing to N rows' worth of results. The
     *           default (zero) is to return all results.
     *     @type int $request_stats_view
     *           The view into RequestStats, as described above.
     *     @type bool $reversed
     *           Experimental API - Please note that this API is currently experimental
     *           and can change in the future.
     *           Return rows in lexiographical descending order of the row keys. The row
     *           contents will not be affected by this flag.
     *           Example result set:
     *               [
     *                 {key: "k2", "f:col1": "v1", "f:col2": "v1"},
     *                 {key: "k1", "f:col1": "v2", "f:col2": "v2"}
     *               ]
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Bigtable\V2\Bigtable::initOnce();
        parent::__construct($data);
    }

    /**
     * Optional. The unique name of the table from which to read.
     * Values are of the form
     * `projects/<project>/instances/<instance>/tables/<table>`.
     *
     * Generated from protobuf field <code>string table_name = 1 [(.google.api.field_behavior) = OPTIONAL, (.google.api.resource_reference) = {</code>
     * @return string
     */
    public function getTableName()
    {
        return $this->table_name;
    }

    /**
     * Optional. The unique name of the table from which to read.
     * Values are of the form
     * `projects/<project>/instances/<instance>/tables/<table>`.
     *
     * Generated from protobuf field <code>string table_name = 1 [(.google.api.field_behavior) = OPTIONAL, (.google.api.resource_reference) = {</code>
     * @param string $var
     * @return $this
     */
    public function setTableName($var)
    {
        GPBUtil::checkString($var, True);
        $this->table_name = $var;

        return $this;
    }

    /**
     * Optional. The unique name of the AuthorizedView from which to read.
     * Values are of the form
     * `projects/<project>/instances/<instance>/tables/<table>/authorizedViews/<authorized_view>`.
     *
     * Generated from protobuf field <code>string authorized_view_name = 9 [(.google.api.field_behavior) = OPTIONAL, (.google.api.resource_reference) = {</code>
     * @return string
     */
    public function getAuthorizedViewName()
    {
        return $this->authorized_view_name;
    }

    /**
     * Optional. The unique name of the AuthorizedView from which to read.
     * Values are of the form
     * `projects/<project>/instances/<instance>/tables/<table>/authorizedViews/<authorized_view>`.
     *
     * Generated from protobuf field <code>string authorized_view_name = 9 [(.google.api.field_behavior) = OPTIONAL, (.google.api.resource_reference) = {</code>
     * @param string $var
     * @return $this
     */
    public function setAuthorizedViewName($var)
    {
        GPBUtil::checkString($var, True);
        $this->authorized_view_name = $var;

        return $this;
    }

    /**
     * This value specifies routing for replication. If not specified, the
     * "default" application profile will be used.
     *
     * Generated from protobuf field <code>string app_profile_id = 5;</code>
     * @return string
     */
    public function getAppProfileId()
    {
        return $this->app_profile_id;
    }

    /**
     * This value specifies routing for replication. If not specified, the
     * "default" application profile will be used.
     *
     * Generated from protobuf field <code>string app_profile_id = 5;</code>
     * @param string $var
     * @return $this
     */
    public function setAppProfileId($var)
    {
        GPBUtil::checkString($var, True);
        $this->app_profile_id = $var;

        return $this;
    }

    /**
     * The row keys and/or ranges to read sequentially. If not specified, reads
     * from all rows.
     *
     * Generated from protobuf field <code>.google.bigtable.v2.RowSet rows = 2;</code>
     * @return \Google\Cloud\Bigtable\V2\RowSet|null
     */
    public function getRows()
    {
        return $this->rows;
    }

    public function hasRows()
    {
        return isset($this->rows);
    }

    public function clearRows()
    {
        unset($this->rows);
    }

    /**
     * The row keys and/or ranges to read sequentially. If not specified, reads
     * from all rows.
     *
     * Generated from protobuf field <code>.google.bigtable.v2.RowSet rows = 2;</code>
     * @param \Google\Cloud\Bigtable\V2\RowSet $var
     * @return $this
     */
    public function setRows($var)
    {
        GPBUtil::checkMessage($var, \Google\Cloud\Bigtable\V2\RowSet::class);
        $this->rows = $var;

        return $this;
    }

    /**
     * The filter to apply to the contents of the specified row(s). If unset,
     * reads the entirety of each row.
     *
     * Generated from protobuf field <code>.google.bigtable.v2.RowFilter filter = 3;</code>
     * @return \Google\Cloud\Bigtable\V2\RowFilter|null
     */
    public function getFilter()
    {
        return $this->filter;
    }

    public function hasFilter()
    {
        return isset($this->filter);
    }

    public function clearFilter()
    {
        unset($this->filter);
    }

    /**
     * The filter to apply to the contents of the specified row(s). If unset,
     * reads the entirety of each row.
     *
     * Generated from protobuf field <code>.google.bigtable.v2.RowFilter filter = 3;</code>
     * @param \Google\Cloud\Bigtable\V2\RowFilter $var
     * @return $this
     */
    public function setFilter($var)
    {
        GPBUtil::checkMessage($var, \Google\Cloud\Bigtable\V2\RowFilter::class);
        $this->filter = $var;

        return $this;
    }

    /**
     * The read will stop after committing to N rows' worth of results. The
     * default (zero) is to return all results.
     *
     * Generated from protobuf field <code>int64 rows_limit = 4;</code>
     * @return int|string
     */
    public function getRowsLimit()
    {
        return $this->rows_limit;
    }

    /**
     * The read will stop after committing to N rows' worth of results. The
     * default (zero) is to return all results.
     *
     * Generated from protobuf field <code>int64 rows_limit = 4;</code>
     * @param int|string $var
     * @return $this
     */
    public function setRowsLimit($var)
    {
        GPBUtil::checkInt64($var);
        $this->rows_limit = $var;

        return $this;
    }

    /**
     * The view into RequestStats, as described above.
     *
     * Generated from protobuf field <code>.google.bigtable.v2.ReadRowsRequest.RequestStatsView request_stats_view = 6;</code>
     * @return int
     */
    public function getRequestStatsView()
    {
        return $this->request_stats_view;
    }

    /**
     * The view into RequestStats, as described above.
     *
     * Generated from protobuf field <code>.google.bigtable.v2.ReadRowsRequest.RequestStatsView request_stats_view = 6;</code>
     * @param int $var
     * @return $this
     */
    public function setRequestStatsView($var)
    {
        GPBUtil::checkEnum($var, \Google\Cloud\Bigtable\V2\ReadRowsRequest\RequestStatsView::class);
        $this->request_stats_view = $var;

        return $this;
    }

    /**
     * Experimental API - Please note that this API is currently experimental
     * and can change in the future.
     * Return rows in lexiographical descending order of the row keys. The row
     * contents will not be affected by this flag.
     * Example result set:
     *     [
     *       {key: "k2", "f:col1": "v1", "f:col2": "v1"},
     *       {key: "k1", "f:col1": "v2", "f:col2": "v2"}
     *     ]
     *
     * Generated from protobuf field <code>bool reversed = 7;</code>
     * @return bool
     */
    public function getReversed()
    {
        return $this->reversed;
    }

    /**
     * Experimental API - Please note that this API is currently experimental
     * and can change in the future.
     * Return rows in lexiographical descending order of the row keys. The row
     * contents will not be affected by this flag.
     * Example result set:
     *     [
     *       {key: "k2", "f:col1": "v1", "f:col2": "v1"},
     *       {key: "k1", "f:col1": "v2", "f:col2": "v2"}
     *     ]
     *
     * Generated from protobuf field <code>bool reversed = 7;</code>
     * @param bool $var
     * @return $this
     */
    public function setReversed($var)
    {
        GPBUtil::checkBool($var);
        $this->reversed = $var;

        return $this;
    }

}

