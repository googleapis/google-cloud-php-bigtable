<?php
namespace Google\Cloud\Bigtable\src;

use Google\Bigtable\Admin\V2\ColumnFamily;
use Google\Bigtable\Admin\V2\GcRule;
use Google\Bigtable\Admin\V2\ModifyColumnFamiliesRequest_Modification as Modification;
use Google\Bigtable\Admin\V2\Table;
use Google\Cloud\Bigtable\Admin\V2\BigtableTableAdminClient;

use Google\Bigtable\V2\Mutation;
use Google\Bigtable\V2\Mutation_SetCell;
use Google\Bigtable\V2\RowFilter;
use Google\Bigtable\V2\RowSet;
use Google\Bigtable\V2\MutateRowsRequest_Entry;
use Google\Bigtable\V2\ReadModifyWriteRule;

use Google\Cloud\Bigtable\V2\BigtableClient;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\MapField;

use Google\GAX\ValidationException;

/**
 *
 */

class BigtableTable
{
	private $BigtableClient;
	private $BigtableTableAdminClient;

	function __construct()
	{
		$this->BigtableClient = new BigtableClient();
		$this->BigtableTableAdminClient = new BigtableTableAdminClient();
	}

	/**
	 * Formats a string containing the fully-qualified path to represent
	 * a instance resource.
	 *
	 * @param string $projectId projectId
	 * @param string $instanceId instanceId
	 *
	 * @return string The formatted instance resource.
	 */
	public function instanceName($projectId, $instanceId)
	{
		$formattedParent = BigtableTableAdminClient::instanceName($projectId, $instanceId);
		return $formattedParent;
	}

	/**
	 * Creates a new table in the specified instance.
	 * @param string $parent       The unique name of the instance in which to create the table.
	 *                             Values are of the form `projects/<project>/instances/<instance>`.
	 * @param string $tableId      The name by which the new table should be referred to within the parent
	 *                             instance, e.g., `foobar` rather than `<parent>/tables/foobar`.
	 * @param array  $optionalArgs {
	 *                             Optional.
	 * @return \Google\Bigtable\Admin\V2\Table
	 */
	public function createTable($parent, $tableId, $optionalArgs = [])
	{
		$Table = new Table();
		$table = $this->BigtableTableAdminClient->createTable($parent, $tableId, $Table, $optionalArgs);
		return $table;
	}

	/**
	 * Formats a string containing the fully-qualified path to represent
	 *
	 * @param string $projectId
	 * @param string $instanceId
	 * @param string $table
	 *
	 * @return string The formatted table resource.
	 */
	public function tableName($projectId, $instanceId, $table)
	{
		return BigtableTableAdminClient::tableName($projectId, $instanceId, $table);
	}

	/**
	 * Creates a new table in the specified instance with column family.
	 * @param string $parent       The unique name of the instance in which to create the table.
	 *                             Values are of the form `projects/<project>/instances/<instance>`.
	 * @param string $tableId      The name by which the new table should be referred to within the parent
	 *                             instance, e.g., `foobar` rather than `<parent>/tables/foobar`.
	 * @param string $columnFamily e.g., `cf`
	 * @param array  $optionalArgs {
	 *                             Optional.
	 * @return \Google\Bigtable\Admin\V2\Table
	 */
	public function createTableWithColumnFamily($parent, $tableId, $columnFamily, $optionalArgs = [])
	{
		$table = new Table();
		$table->setGranularity(3);

		$MapField = $this->columnFamily(3, $columnFamily);
		$table->setColumnFamilies($MapField);
		$table = $this->BigtableTableAdminClient->createTable($parent, $tableId, $table, $optionalArgs);
		return $table;
	}

	/**
	 * Creates a new table in the specified instance with column family.
	 * @param integer $MaxNumVersions 
	 *                             
	 * @param string $columnFamily e.g., `cf`
	 * @return \Google\Protobuf\Internal\MapField
	 */
	public function columnFamily($MaxNumVersions, $columnFamily)
	{
		$gc = new GcRule();
		$gc->setMaxNumVersions($MaxNumVersions);

		$cf = new ColumnFamily();
		$cf->setGcRule($gc);

		$MapField = new MapField(GPBType::STRING, GPBType::MESSAGE, ColumnFamily::class );
		$MapField[$columnFamily] = $cf;
		return $MapField;
	}

	/**
	 * Permanently deletes a specified table and all of its data.
	 *
	 * @param string $table 		The unique name of the table to be deleted.
	 *                          	Values are of the form
	 *                          	`projects/<project>/instances/<instance>/tables/<table>`.
	 * @param array  $optionalArgs {
	 *                             Optional.
	 *
	 * @throws \Google\GAX\ApiException if the remote call fails
	 */
	public function deleteTable($table, $optionalArgs = []) {
		return $this->BigtableTableAdminClient->deleteTable($table);
	}

	/**
	 * Lists all tables served from a specified instance.
	 *
	 * @param string $parent       The unique name of the instance for which tables should be listed.
	 *                             Values are of the form `projects/<project>/instances/<instance>`.
	 * @param array  $optionalArgs {
	 *                             Optional.
	 *
	 * @return \Google\GAX\PagedListResponse
	 */
	public function listTables($parent, $optionalArgs = []) {
		$PagedListResponse = $this->BigtableTableAdminClient->listTables($parent, $optionalArgs);
		return $PagedListResponse;
	}

	/**
	 * Gets metadata information about the specified table.
	 *
	 * @param string $table 	The unique name of the requested table.
	 *                          Values are of the form
	 *                          `projects/<project>/instances/<instance>/tables/<table>`.
	 *
	 * @return \Google\Bigtable\Admin\V2\Table
	 *
	 * @throws \Google\GAX\ApiException if the remote call fails
	 */
	public function getTable($table) {
		return $this->BigtableTableAdminClient->getTable($table);
	}

	/**
	 * Modify column family to perticular table.
	 *
	 * @param string $table         The unique name of the table whose families should be modified.
	 *                              Values are of the form
	 *                              `projects/<project>/instances/<instance>/tables/<table>`.
	 * @param string $cfName        Column family name.
	 *
	 * @param array  $optionalArgs {
	 *                             Optional.
	 *
	 * @return \Google\Bigtable\Admin\V2\Table
	 *
	 * @throws \Google\GAX\ApiException if the remote call fails
	 */
	public function addColumnFamilies($table, $cfName, $optionalArgs = []) {
		$gc = new GcRule();
		$gc->setMaxNumVersions(3);

		$cf = new ColumnFamily();
		$cf->setGcRule($gc);

		$Modification = new Modification();
		$Modification->setId($cfName);
		$Modification->setCreate($cf);

		$Modifications    = [];
		$Modifications[0] = $Modification;

		$table = $this->BigtableTableAdminClient->modifyColumnFamilies($table, $Modifications, []);
		return $table;
	}

	/**
	 * delete column family from perticular table.
	 *
	 * @param string $table         The unique name of the table whose families should be modified.
	 *                              Values are of the form
	 *                              `projects/<project>/instances/<instance>/tables/<table>`.
	 * @param string $cfName        Column family name.
	 *
	 * @param array  $optionalArgs {
	 *                             Optional.
	 *
	 * @return \Google\Bigtable\Admin\V2\Table
	 *
	 * @throws \Google\GAX\ApiException if the remote call fails
	 * @experimental
	 */
	public function deleteColumnFamilies($table, $cfName, $optionalArgs = []) {
		$Modification = new Modification();
		$Modification->setId($cfName);
		$Modification->setDrop(true);
		$Modifications = [];
		$Modifications[] = $Modification;

		$table = $this->BigtableTableAdminClient->modifyColumnFamilies($table, $Modifications, []);
		return $table;
	}

	/**
     * Mutates multiple rows in a batch. Each individual row is mutated
     * atomically as in MutateRow, but the entire batch is not executed
     * atomically.
     *
     * @param string  $tableName    The unique name of the table to which the mutations should be applied.
     * @param Entry[] $entries      The row keys and corresponding mutations to be applied in bulk.
     *                              Each entry is applied as an atomic mutation, but the entries may be
     *                              applied in arbitrary order (even between entries for the same row).
     *                              At least one entry must be specified, and in total the entries can
     *                              contain at most 100000 mutations.
     * @param array   $optionalArgs {
     *                              Optional.
     *
     *     @type int $timeoutMillis
     *          Timeout to use for this call.
     * }
     *
     * @return \Google\GAX\ServerStream
     *
     * @throws \Google\GAX\ApiException if the remote call fails
     * @experimental
     */
	public function mutateRows($table, $entries, $optionalArgs = [])
	{
		$ServerStream = $this->BigtableClient->mutateRows($table, $entries, $optionalArgs);
		return $ServerStream;
	}

	/**
     * Mutates a row atomically. Cells already present in the row are left
     * unchanged unless explicitly changed by `mutation`.
     *
     * @param string     $tableName    The unique name of the table to which the mutation should be applied.
     *                                 Values are of the form
     *                                 `projects/<project>/instances/<instance>/tables/<table>`.
     * @param string     $rowKey       The key of the row to which the mutation should be applied.
     * @param Mutation[] $mutations    Changes to be atomically applied to the specified row. Entries are applied
     *                                 in order, meaning that earlier mutations can be masked by later ones.
     *                                 Must contain at least one entry and at most 100000.
     * @param array      $optionalArgs {
     *                                 Optional.
     *
     *     @type \Google\GAX\RetrySettings|array $retrySettings
     *          Retry settings to use for this call. Can be a
     *          {@see Google\GAX\RetrySettings} object, or an associative array
     *          of retry settings parameters. See the documentation on
     *          {@see Google\GAX\RetrySettings} for example usage.
     * }
     *
     * @return \Google\Bigtable\V2\MutateRowResponse
     *
     * @throws \Google\GAX\ApiException if the remote call fails
     */
	public function mutateRow($tableName, $rowKey, $mutations)
	{
		$MutateRowResponse = $this->BigtableClient->mutateRow($tableName, $rowKey, $mutations);
		return $MutateRowResponse;
	}

	/**
	 * Set Mutate Rows Request.
	 * 
	 * @param string $rowKey
	 * 
	 * @param Mutation[] $mutations
	 * 
	 * @return \Google\Bigtable\V2\MutateRowsRequest_Entry 
	 */
	public function mutateRowsRequest($rowKey, $mutations)
	{
		$MutateRowsRequest_Entry = new MutateRowsRequest_Entry();
        $MutateRowsRequest_Entry->setRowKey($rowKey);
		$MutateRowsRequest_Entry->setMutations($mutations);
		return $MutateRowsRequest_Entry;
	}

	/**
	 * Set Mutation SetCell.
	 * 
	 * @param array   $cell {
	 * 				@type	string cf			Column Family name
	 * 				@type	string qualifier	Qualifier name
	 * 				@type	string value		value
	 * 				@type	string timestamp	Timestamp in micros
	 * 
	 * @return \Google\Bigtable\V2\Mutation_SetCell 
	 */
	public function mutationCell($cell)
	{
		$Mutation_SetCell = new Mutation_SetCell();
		if(isset($cell['cf']))
			$Mutation_SetCell->setFamilyName($cell['cf']);
		if(isset($cell['qualifier']))
			$Mutation_SetCell->setColumnQualifier($cell['qualifier']);
		if(isset($cell['value']))
			$Mutation_SetCell->setValue($cell['value']);
		if(isset($cell['timestamp']))
			$Mutation_SetCell->setTimestampMicros($cell['timestamp']);

		$Mutation = new Mutation();
		$Mutation->setSetCell($Mutation_SetCell);
		return $Mutation;
	}

	/**
	 * Read row from table.
	 *
	 * @param string $table         The unique name of the table whose families should be modified.
	 *                              Values are of the form
	 *                              `projects/<project>/instances/<instance>/tables/<table>`.
	 *
	 * @param array  {
	 *     @array $rowKeys
	 *          The row keys and/or ranges to read. If not specified, reads from all rows.
	 *     @array $filter
	 *          The filter to apply to the contents of the specified row(s). If unset,
	 *          reads the entirety of each row.
	 *     @int $rowsLimit
	 *          The read will terminate after committing to N rows' worth of results. The
	 *          default (zero) is to return all results.
	 *     @int $timeoutMillis
	 *          Timeout to use for this call.
	 * }
	 *
	 * @return \Google\Cloud\Bigtable\V2\FlatRow
	 */
	public function readRows($table, $rowKeys = [], $filter = [], $rowsLimit = '', $timeoutMillis = '') {
		$optionalArgs = [];
		if (count($rowKeys) > 0) {
			$rowSet = new RowSet();
			$rowSet->setRowKeys($rowKeys);
			$optionalArgs['rows'] = $rowSet;
		}

		if (count($filter) > 0) {
			$rowFilter = new RowFilter();
			// $optionalArgs['filter'] = $rowFilter;
		}

		if ($rowsLimit) {
			$optionalArgs['rowsLimit'] = $rowsLimit;
		}

		if ($timeoutMillis) {
			$optionalArgs['timeoutMillis'] = $timeoutMillis;
		}

		$BigtableClient = new BigtableClient();//BigtableGapicClient();
		$chunkFormatter = $BigtableClient->readRows($table, $optionalArgs);
		$rows           = [];
		foreach ($chunkFormatter->readAll() as $flatRow) {
			$rows[] = $flatRow;
		}
		return $rows;
	}
}
?>