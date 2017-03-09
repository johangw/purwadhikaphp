<!DOCTYPE html>
<html>
	<head><title>Hit Counter</title></head>
	<body>
		<h1>A Simple hit counter dengan akses Class File</h1>
<?php
	include_once("file.class.php");
	// Proses untuk Counter
	$counter=0;
	$counterFile = "counter.txt";
	$file = new File($counterFile);
	$counter = $file->membacaFile(); // membaca data di file
	$file->menutupFile(); // menutup File
	$counter++;
	echo "<p>You're visitor No. $counter .</p>";	
	$file->menulisFile($counter); // menulis untuk merubah data di file
	$file->menutupFile(); // menutup File

	// Proses untuk Log Date
	// 1. Tampung data tanggal di variabel
	$tgl = "02-03-2017";
	// 2. Membuat object File --> dengan data nama file
	$file_date = new File("date.txt");
	// 3. Menulis data tanggal ke File
	$file_date->menulisFile($tgl);
	// 4. Menutup File
	$file_date->menutupFile();	
?>
	</body>
</html>