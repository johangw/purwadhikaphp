<?php
class Table {
	private $titleTbl;
	private $count_row = 0;
	private $titleHeader = array();
	private $data = array();
	private $col=0;
	private $row;
	
	public function __construct($titleTbl, $titleHeader, $data) {
		$this->titleTbl = $titleTbl;
		$this->titleHeader = $titleHeader;
		$this->data = $data;
	}
	
	public function generateTable() {
		echo "<table width='100%' border=1>";
		echo "<tr>";
		// create header
		for ($x=0;$x<count($this->titleHeader); $x++) {
			$col++;
			echo "<th>".$this->titleHeader[$x]."</th>";
		}
		echo "</tr>";
		//
		echo "</table>";	
	}
}
?>