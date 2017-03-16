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
		echo "<h1 align='center' width='100%'>".$this->titleTbl."</h1>";
		echo "<table width='100%' border=1>";
		echo "<tr>";
		// create header
		$col = count($this->titleHeader);
		for ($x=0;$x<$col; $x++) {
			echo "<th>".$this->titleHeader[$x]."</th>";
		}
		echo "</tr>";
		
		// create content
		for ($x=0;$x<count($this->data); $x++) {
			echo "<tr>";
			for ($y=0;$y<$col; $y++) {
				echo "<td>".$this->data[$x][$this->titleHeader[$y]]."</td>";
			}
			echo "</tr>";
		}
		echo "</table>";	
	}
	
	public function generateToHTML() {
		$html = "<html> \n";
		$html .= "<head><title>Generate HTML</title></head> \n";
		$html .= "<body>";
		$html .= "<h1 align='center' width='100%'>".$this->titleTbl."</h1> \n";
		$html .= "<table width='100%' border=1> \n";
		$html .= "<tr> \n";
		// create header
		$col = count($this->titleHeader);
		for ($x=0;$x<$col; $x++) {
			$html .= "<th>".$this->titleHeader[$x]."</th> \n";
		}
		$html .= "</tr> \n";
		
		// create content
		for ($x=0;$x<count($this->data); $x++) {
			$html .= "<tr> \n";
			for ($y=0;$y<$col; $y++) {
				$html .= "<td>".$this->data[$x][$this->titleHeader[$y]]."</td> \n";
			}
			$html .= "</tr> \n";
		}
		$html .= "</table> \n";	
		$html .= "</body> \n";
		$html .= "</html> \n";		
		return $html;
	}
}
?>
