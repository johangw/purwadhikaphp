<?php

include_once("file.class.php");

if(isset($_POST["submit"])) {//cek apakah form sudah disubmit
  //data dari form buku tamu
  $nama = $_POST["nama"];
  $email = $_POST["email"];
  $pesan = $_POST["pesan"];

  //memberikan nama file dan lokasi file
  $filename = "buku_tamu.txt";

  //format data yang disimpan dalam File
  $data = $nama . "," . $email . "," . $pesan . "\n";
  //initiate object (create object)
  $file = new File ($filename, $data);
  $file->menutupFile();
  echo "Terima kasih sudah mengisi buku tamu";

}

?>
