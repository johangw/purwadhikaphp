<?php
include_once("Kendaraan.php");
class Mobil extends Kendaraan {
	public function __construct($nm) {
		echo "Ini Kendaraan Mobil $nm <br />";		
	}
	
	public function klakson() {
		echo "Kelakson: Ten...Ten...<br/>";		
	}
}
?>