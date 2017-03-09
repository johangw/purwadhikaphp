<?
class MyClass {
	// Class properties and methods go here
	private $prop1 = "I'm a class property!";
	
	public function setProperty($newval) {
		$this->prop1 = $newval;
	}
	public function getProperty() {
		return $this->prop1 . "<br />";
	}
}
	$obj = new MyClass;
	// var_dump($obj);
	// echo $obj->prop1; // cara 1
	echo $obj->getProperty(); // cara 2
?>