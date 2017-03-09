<?php
include_once ("myClass2.php");
class MyOtherClass extends MyClass2 {
	public function __construct() {
		parent:: __construct(); // call the parent’s class constructor
		echo 'A new constructor in "', __CLASS__, '" <br />';
	}

	public function newMethod() {
      echo 'From a new method in "', __CLASS__, '" <br />';
	}
}

// Create a new object
$newobj = new MyOtherClass;
 
// Output the object as a string
echo $newobj->newMethod();
 
// Use a method from the parent class
echo $newobj->getProperty();
?>