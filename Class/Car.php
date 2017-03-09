<?php
class Car {
	private $speed=0;
	private $fuel=0;
	
	public function __construct($s,$f) {
		$this->speed = $s;
		$this->fuel = $f;
    }
	
	public function decelerate($s) {
		$this->speed = $this->speed - $s;
	}
	public function accelerate($s) {
		$this->speed = $this->speed + $s;
	}
	
	public function getCurrentSpeed() {
		return $this->speed;
	}
}

	$obj = new Car(20,30);
	echo "Current Speed (start) = " . $obj->getCurrentSpeed() . "<br>";
	$obj->decelerate(5);
	$obj->accelerate(50);
	echo "Current Speed (1) = " . $obj->getCurrentSpeed() . "<br>";
	$obj->decelerate(65);
	echo "Current Speed (end) = " . $obj->getCurrentSpeed() . "<br>";
?>
