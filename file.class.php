<?php
class File {
  private $filename ="";
  private $handle;
  private $access;

  /*
  public function __construct($fn) {
    //periksa keberadaan file, jika tdk ada maka dibuat
    if (!file_exists($fn)) {
      if (!($this->handle = fopen($fn, "w"))) {
        die ("Cannot create the counter file");
      }
      else {
        fwrite($this->handle,0);
        fclose($this->handle);
      }
    }
    $this->filename = $fn;
  }
  */

  public function __construct($fn,$dt){
    //periksa keberadaan file, jika tidak ada maka dibuat
    $this->filename = $fn;
    if (!file_exists($fn)){
      $this->menulisFile ($dt);
    }
    else {
      $this->menambahIsiFile($dt);
    }
  }

  public function menambahIsiFile ($wr) {//menambah to File
    if($this->membukaFile("a")) {
      fwrite($this->handle, $wr);
    }
    else die ("Cannot open the file for appending.");
  }

  public function membukaFile($bukaFile)
  {
    if($this->handle=fopen($this->filename,$bukaFile)) return true;
    else return false;
  }
  
  public function membacaFile(){
    if (!($this->handle = fopen($this->filename, "r"))) {
      die ("Cannot read the counter file");
  }
  return (int) fread($this->handle,20);
}
public function menulisFile($wr){
  if (!($this->handle = fopen($this->filename, "w"))) {
    die ("Cannot open the counter file for writing.");
}
  fwrite($this->handle,$wr);
}
public function menutupFile(){
  fclose($this->handle);
}
}
?>
