<?php
class MyClass {
	private $prop1="Protected Method!";
	protected function getProperty()  { 
		// ==> change accessibility to protected 
		return $this->prop1 . "<br />";
	}
}

class MyOtherClass extends MyClass
{
  public function callProtected()
  {
      // call protected method
      return $this->getProperty();
  }
}

// Create a new object
$newobj = new MyOtherClass;

// Call the protected method from within a public method
echo $newobj-> callProtected();

?>