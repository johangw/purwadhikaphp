<?php
include_once("Kendaraan.php");
class manusia {
	public function __construct($nm) {
		echo "Namaku $nm <br />";		
	}
	
	public function mempunyaiKendaraan() {
		echo "Ini kendaraanku";
		$kdr = new Kendaraan();
		$kdr->klakson();
	}
}
?>