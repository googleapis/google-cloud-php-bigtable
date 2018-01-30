<?php
/*!
 * Copyright 2016 Google Inc. All Rights Reserved.
 *
 * Licensed under the Apache License, Version 2.0 (the "License");
 * you may not use this file except in compliance with the License.
 * You may obtain a copy of the License at
 *
 *      http://www.apache.org/licenses/LICENSE-2.0
 *
 * Unless required by applicable law or agreed to in writing, software
 * distributed under the License is distributed on an "AS IS" BASIS,
 * WITHOUT WARRANTIES OR CONDITIONS OF ANY KIND, either express or implied.
 * See the License for the specific language governing permissions and
 * limitations under the License.
 */
namespace Google\Cloud\Bigtable\V2;
class Cell {
	private $family;
	private $qualifier;
	private $timestamp;
	private $value;
	private $labels;

	public function setFamily($family) {
		$this->family = $family;
	}

	public function getFamily() {
		return $this->family;
	}

	public function setQualifier($qualifier) {
		$this->qualifier = $qualifier;
	}

	public function getQualifier() {
		return $this->qualifier;
	}

	public function setTimestamp($timestamp) {
		$this->timestamp = $timestamp;
	}

	public function getTimestamp() {
		return $this->timestamp;
	}

	public function setValue($value) {
		$this->value = $value;
	}

	public function getValue() {
		return $this->value;
	}

	public function setLabels($labels) {
		$this->labels = $labels;
	}

	public function getLabels() {
		return $this->labels;
	}

	public function appendValue($value) {
		$this->value = $this->value.$value;
	}

	public function equals($obj) {
		if (!($obj instanceof Cell)) {
			return false;
		}
		$other = $obj;
		return
		$this->timestamp == $other->timestamp &&
		$this->family == $other->family &&
		$this->qualifier == $other->qualifier &&
		$this->value == $other->value &&
		Objects.equal(labels, other.labels);
	}

}

class FlatRow {
	private $rowKey = NULL;
	private $cells  = [];

	public function setFlatRow($rowKey, $cells) {
		$this->rowKey = $rowKey;
		$this->cells  = $cells;
	}

	public function reSetFlatRow() {
		$this->rowKey = '';
		$this->cells  = [];
	}

	public function getRowKey() {
		return $this->rowKey;
	}

	public function setRowKey($rowKey) {
		$this->rowKey = $rowKey;
	}

	public function getCells() {
		return $this->cells;
	}

	public function setCells($cells) {
		$this->cells = $cells;
	}
	public function addCell($cell) {
		array_push($this->cells, $cell);
	}

	public function equals($obj) {
		if (!($obj instanceof FlatRow)) {
			return false;
		}
		// FlatRow other = (FlatRow) obj;
		// return Objects.equal(rowKey, other.rowKey) &&
		//     Objects.equal(cells, other.getCells());
	}
}

?>