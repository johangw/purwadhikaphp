<?php
	abstract class Bentuk {
		public $title;
		abstract protected function luas();
		abstract protected function keliling();	
		
		public function getTitle() {
			return $this->title;
		}
	}
	
	class Segiempat extends Bentuk {
		protected $panjang;
		protected $lebar;
		private static $idx=-1; // 16 Maret 2017
		
		public function __construct($t, $p, $l) {
			$this->title = $t;
			$this->panjang = $p;
			$this->lebar = $l;
		}
		final public function luas() {
			return $this->panjang * $this->lebar;
		}
		
		final function keliling() {
			return 2 * ($this->panjang + $this->lebar);
		}
		
		public function setPanjang($p) {
			$this->panjang = $p;
		}
		// untuk menambahkan 1 pada variabel idx  (16 Maret 2017)
		public function setIdx() {
			return self::$idx++;
		}		
		// untuk memperoleh nilai idx terkini (16 Maret 2017)
		public function getIdx() {
			return self::$idx;
		}				
	}
	
	final class Bujursangkar extends Segiempat  {
		public function __construct($t, $s) {
			$this->title = $t;
			$this->panjang = $s;
			$this->lebar = $s;
		}
		/*
		public function luas() {
			return $this->panjang * $this->panjang;
		}
		*/
	}
	/*
	class ABC extends Bujursangkar  {
		public function __construct($t, $s) {
			$this->title = $t;
			$this->panjang = $s;
			$this->lebar = $s;
		}
	}
	*/
	// Obyek untuk Segi Empat
	$sg = new Segiempat('Segi Empat',10,5);
	echo "<h2>Bentuk ".$sg->getTitle(). "</h2>";
	echo "Luas = ".$sg->luas(). "<br />";
	echo "Keliling = ".$sg->keliling(). "<br />";	
	
	$sg_temp = $sg;
	// $sg_clone = clone $sg;
	$sg->setPanjang(9);
	echo "Luas = ".$sg->luas(). "<br />";
	echo "Keliling = ".$sg->keliling(). "<br />";	
	echo "--- <br />";	
	echo "Luas Temp = ".$sg_temp->luas(). "<br />";
	echo "Keliling Temp = ".$sg_temp->keliling(). "<br />";	
	echo "--- <br />";	
	$sg_clone = clone $sg;
	$sg->setPanjang(5);
	echo "Luas Clone = ".$sg_clone->luas(). "<br />";
	echo "Keliling Clone = ".$sg_clone->keliling(). "<br />";	
	echo "--- <br />";	
	// Obyek untuk Bujur Sangkar
	$bs = new Bujursangkar('Bujur Sangkar',10);
	echo "<h2>Bentuk ".$bs->getTitle(). "</h2>";
	echo "Luas = ".$bs->luas(). "<br />";
	echo "Keliling = ".$bs->keliling(). "<br />";
	echo "--- <br />";	
	
	// --- Untuk Contoh Static ---
	$tampung = array();
	$sg->setIdx();
	$idx_ = $sg->getIdx();	
	echo "INDEX = $idx_ <br />";
	$tampung[$idx_] = $sg;
	//
	$bs->setIdx();
	$idx_ = $bs->getIdx();	
	echo "INDEX = $idx_ <br />";
	$tampung[$idx_] = $bs;
	//
	if (!isset($_POST['submit'])) {
		echo "<form action='bidang.class.php' method='post'>";
		echo "<select name='bentuk'>";
		for ($x=0;$x<=count(tampung); $x++) {
			echo "<option value='".$x."'>".$tampung[$x]->getTitle()."</option>";
		}
		echo "</select>";
		echo "<br />";
		echo "<input type='submit' name='submit' value='Hasil Pilihan' />";
		echo "</form>";
	}
	else {
		$idx_ = $_POST['bentuk'];
		echo "<h2>Hasil Pilih</h2>";
		echo "Pilihan Anda adalah <b>".$tampung[$idx_]->getTitle()."</b><br />";
		echo "Luas = ".$tampung[$idx_]->luas(). "<br />";
		echo "Keliling = ".$tampung[$idx_]->keliling(). "<br />";
		echo "--- <br />";			
	}
	// ----------
?>