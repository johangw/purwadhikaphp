<?php
	include_once("file.class.php"); 
	if(isset($_POST["submit"])) { // cek apakah form sudah disubmit
		// data dari form pegawai
		$nip = $_POST["nip"];
		$nama = $_POST["nama"];
		$email = $_POST["email"];
	
		// memberikan nama file dan lokasi file
		$filename ="D:\\xampp\\htdocs\purwadhika\\pegawai.txt";
		
		// format data yang disimpan dalam file 
		$tglsimpan = date("d/m/Y h:i:s"); // menggunakan fungsi date di php
		$data = $nip . "," . $nama . "," . $email . "," . $tglsimpan . "\n";
		// initiate object (create object)
		$file = new File($filename, $data); 
		$file->menutupFile();
		echo "Data Pegawai sudah Tersimpan! <br />";
		echo "<a href=daftar_pegawai.php>Daftar Pegawai</a>";
	}	
	else {
		// 
		echo "Pegawai.php harus melalui FormPegawai";
	}

?>