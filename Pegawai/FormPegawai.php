<?php
	include_once "Form.class.php";
	echo "<html>";
	echo "<head><title>Form Pegawai</title></head>";
	echo "<body>";
	$fpegawai = new Form("Form Pegawai", "Pegawai.php", "Simpan Data");
	$fpegawai->setAttribut("NIP","nip");
	$fpegawai->setAttribut("Nama", "nama");
	$fpegawai->setAttribut("Email", "email");
	$fpegawai->generateForm();
	echo "</body>";
	echo "</html>";	
?>