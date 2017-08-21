<?php
	// constructor adalah method khusus yang dijalankan pada saat obyek dibuat (instansiasi)
	// destructor adalah method khusus yang dijalankan pada saat obyek dihapus
	
	class Mobil {
		
		private $merek = "Hyundai";
		private $warna = "Hijau";
		
		// 
		public function __construct() {
			echo "ini berasal dari constructor kelas Mobil..<br />";
		}

		public function mengendaraiMobil() {
			return "Sedang mengendarai mobil $this->merek yang berwarna $this->warna <br />";
		}		
		
		public function __destruct() {
			echo "Ini berasal dari bagian destructor kelas Mobil .. !! <br />";
		}
	}

	$mobilBMW = new Mobil();
	
	echo "<br />";
	echo $mobilBMW->mengendaraiMobil();
	echo "<br />";
?>
		
