<?php
	include_once "form.class.php";
	echo "<html>";
	echo "<head><title>Form Pegawai</title></head>";
	echo "<body>";
	$fpegawai = new Form("Form Pegawai", "", "Simpan Data");
	$fpegawai->title="Form Pegawai";
	$fpegawai->setAttribut("NIP", "nip");
	$fpegawai->setAttribut("Nama", "nama");
	$fpegawai->setAttribut("Email", "email");
	$fpegawai->generateForm();
	echo "</body>";
	echo "</html>";
?>