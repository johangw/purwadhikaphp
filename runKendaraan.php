<?php
	include_once("Mobil.php");
	include_once("Pesawat.php");
	include_once("Manusia.php");
	
	$sedan = new Mobil("Sedan");
	$sedan->klakson();
	
	$bus = new Mobil("Bus");
	$bus->klakson();
	//
	$psw = new Pesawat();
	$psw->klakson();
	//
	$mn = new Manusia("Budi");
	$mn->mempunyaiKendaraan();
?>