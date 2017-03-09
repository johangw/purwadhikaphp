<?php
class Form {
	private $title;
	private $action = "";
	private $submit = "Submit";
	private $count_attr = 0;
	private $attributs = array();
	
	public function __construct($title, $action, $submit) {
		$this->title = $title;
		$this->action = $action;
		$this->submit = $submit;
	}
	
	public function setAttribut($label,$name) {		
		$this->attributs[$this->count_attr]['label'] = $label;
		$this->attributs[$this->count_attr]['name'] = $name;
		$this->count_attr++;
	}
	
	public function generateForm() {
		echo "<form action='". $this->action. "' method='POST'>";
		echo "<table width='100%'>";
		echo "<tr><td colspan='3' align='center'><h2>$this->title</h2></td></tr>";		
		for ($x=0;$x<count($this->attributs); $x++) {
			echo "<tr> <td align='right' width=45%>".$this->attributs[$x]['label']."</td>";
			echo "<td align='center' width=5%>:</td>";
			echo "<td width=50%><input type='text' name='".$this->attributs[$x]['name']."'></td></tr>";
		}
		echo "<tr><td colspan='3' align='center'>";
		echo "<input type='submit' name='submit' value='".$this->submit."'></td></tr>";
		echo "</table>";	
	}
}
?>