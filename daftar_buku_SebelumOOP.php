<?php
  $filename = "buku_tamu_SebelumOOP.txt";
  $file = fopen($filename,"r");
  echo "<h2>Daftar Buku Tamu</h2>";
  $handle = fopen($filename, "r");
  while ($record = fgetcsv($handle,0)) {
    echo "Nama: $record[0], Email: $record[1], Pesan: $record[2] <br/>";
  }
  fclose ($handle);
?>
