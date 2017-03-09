<?php
	include_once("file.class.php");
	include_once("Table.class.php");
	
	$namafile ="D:\\xampp\\htdocs\purwadhika\\pegawai.txt";
	// initiate object (create object)
	$file = new File($namafile,"");
	// echo "<h2>Daftar Pegawai</h2>";
	// echo "<table border=1>";
	$tblHeader = array("NIP","Nama","Email","Waktu Simpan");
	$tPegawai = new Table("Daftar Pegawai",$tblHeader,"");
	$tPegawai->generateTable();
	// membaca method ambilFormatCSV
	/*
	while ($record = $file->ambilFormatCSV()) {
		echo "<tr><td>$record[0]</td><td>$record[1]</td><td>$record[2]</td><td>$record[3]</td></tr>";
	}
	echo "</table>";
	*/
	$file->menutupFile();
?>