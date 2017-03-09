<?php
include_once("Kendaraan.php");
class Pesawat extends Kendaraan {
	public function __construct() {
		echo 'Ini Kendaraan Pesawat <br />';		
	}
	
	public function klakson() {
		echo "Klakson: Tet...Tet...<br/>";		
	}
}
?>