<?php
	include_once("file.class.php");
	include_once("Table.class.php");
	
	$datarec = array();
	$namafile ="D:\\xampp\\htdocs\purwadhika\\pegawai.txt";
	// initiate object (create object)
	$file = new File($namafile,"");
	// echo "<h2>Daftar Pegawai</h2>";
	// echo "<table border=1>";
	$tblHeader = array("NIP","Nama","Email","Waktu Simpan");
	// membaca method ambilFormatCSV
	/*
	while ($record = $file->ambilFormatCSV()) {
		echo "<tr><td>$record[0]</td><td>$record[1]</td><td>$record[2]</td><td>$record[3]</td></tr>";
	}
	echo "</table>";
	*/
	//
	$idx=0;
	while ($record = $file->ambilFormatCSV()) {
		for ($x=0;$x<count($tblHeader);$x++) {
			$datarec[$idx][$tblHeader[$x]] = $record[$x];
		}
		$idx++;
	}
	$tPegawai = new Table("Daftar Pegawai", $tblHeader, $datarec);
	$tPegawai->generateTable();	
	$html = $tPegawai->generateToHTML();
	$file->menutupFile();
	$namafile ="D:\\xampp\\htdocs\purwadhika\\daftarpegawai.html";
	$file = new File($namafile,$html);
	$file->menutupFile();
?>
