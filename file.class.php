<?php
class File {
	private $filename = "";
	private $handle;
	private $access;
	/*
	public function __construct($fn) {
		// periksa keberadaan file, jika tidak ada maka dibuat
		$this->filename = $fn;
		if (!file_exists($fn)) {			
			$this->membukaFile("w");
			if ($this->membukaFile("w")) {
				fwrite($this->handle, 0);
				fclose($this->handle);				
			} 
			else {
				die ("Cannot create the file.");
			}
		}
	}
	*/
	
	public function __construct($fn,$dt) {
		// periksa keberadaan file, jika tidak ada maka dibuat
		$this->filename = $fn;
		if (!file_exists($fn)) {			
			$this->menulisFile($dt);
		}
		else {
			if ($dt == "") $this->membukaFile("r");
			else $this->menambahIsiFile($dt);						
		}
	}	
	
	public function menambahIsiFile($wr) { // menambah to File
		if($this->membukaFile("a")) {
			fwrite($this->handle, $wr);		
		}
		else die ("Cannot open the file for appending.");
	}	
	
	public function membukaFile($ma) {
		if ($this->handle = fopen($this->filename, $ma)) return true;
		else return false;
	}
	
	public function membacaFile() { // read from File
		if ($this->membukaFile("r")) {
			return (int) fread($this->handle, 20);
		}
		else die ("Cannot read the file.");
	}
	
	public function ambilFormatCSV() { // read from File
		if ($this->handle) {
			return fgetcsv($this->handle, 0);
		}
		else die ("Cannot read the file.");
	}
	
	public function menulisFile($wr) { // write to File
		if($this->membukaFile("w")) {
			fwrite($this->handle, $wr);		
		}
		else die ("Cannot open the file for writing.");
	}
	
	public function menutupFile() {
		fclose($this->handle);		
	}
}
?>