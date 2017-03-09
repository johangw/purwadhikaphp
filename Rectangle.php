<?php
class Rectangle {
	private $length;
	private $width;
	
	public function __construct() {
		echo 'The class "', __CLASS__, '" was initiated!<br />';
		$this->length=0;
		$this->width=0;		
    }
	
	public function __destruct() {
		echo 'The class "', __CLASS__, '" was destroyed!<br />';
	}
	
	public function setLength($l) {
		$this->length = $l;
	}
	public function setWidth($w) {
		$this->width = $w;
	}
	
	public function perimeter() {
		return 2 * ($this->length + $this->width);
	}
	
	public function __toString() {
		echo 'The class "', __CLASS__, '" !!!!!<br />';
		// return "";
	}

}

	$obj = new Rectangle();
	$obj->setLength(10);
	$obj->setWidth(5);
	echo "Perimeter = " . $obj->perimeter() . "<br>";
	// unset($obj);
	echo $obj; // wajib __toString menggunakan return
	$obj; // __toString tidak perlu return 
?>