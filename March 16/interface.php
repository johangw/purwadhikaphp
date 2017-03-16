<?php
abstract class CarX {
	private $model;
	public function setCarModel($name){
		$this->model = $name;
	}
	
	public function getCarModel() {
		return $this->model;
	}
}

interface CarY { 
  public function setModel($name);
  public function getModel();
}

interface Human { 
  public function setName($name);
  public function getName();
}

class miniCar extends CarX implements CarY, Human {
  private $name;
   
  public function setModel($name) { 
    $this->model = $name; 
  }
  
  public function getModel() {
    return $this->model; 
  }
  
  public function setName($name) { 
    $this->name = $name; 
  }
  
  public function getName() {
    return $this->name; 
  }  
}
//
$mc = new miniCar;
$mc->setModel("New Model");
echo "Model: ".$mc->getModel() . "<br />";
$mc->setCarModel("New Car Model");
echo "Car Model: ".$mc->getCarModel() . "<br />";
$mc->setName("Purwadhika");
echo "Name: ".$mc->getName();
?>