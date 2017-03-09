<?php
	include_once("file.class.php");
	
	$namafile ="D:\\xampp\\htdocs\purwadhika\\buku_tamu.txt";
	// initiate object (create object)
	$file = new File($namafile,"");
	echo "<h2>Daftar Buku Tamu</h2>";
	echo "<table border=1>";
	echo "<tr><th>Nama</th><th>Email</th><th>Pesan</th></tr>";
	// membaca method ambilFormatCSV
	while ($record = $file->ambilFormatCSV()) {
		echo "<tr><td>$record[0]</td><td>$record[1]</td><td>$record[2]</td></tr>";
	}
	echo "</table>";
	$file->menutupFile();
?>