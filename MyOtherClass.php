<?php
include_once("myClass2.php");
// include("myClass2.php");
class MyOtherClass extends MyClass2 {
	public function newMethod() {
		echo 'From a new method in "', __CLASS__, '" <br />';
	}
}

class MyOtherClass1 extends MyOtherClass {
	public function newMethod() {
		echo 'From a new method in "', __CLASS__, '" <br />';
	}
}
echo "From MyOtherClass <br/>";
// Create a new object
$newobj = new MyOtherClass;
// Output the object as a string
echo $newobj->newMethod();
// Use a method from the parent class
echo $newobj->getProperty();

echo "From MyOtherClass1 <br/>";
$newobj1 = new MyOtherClass1;
// Output the object as a string
echo $newobj1->newMethod();
// Use a method from the parent class
echo $newobj1->getProperty();


?>