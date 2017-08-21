<?php
	// constructor sering digunakan untuk mengatur nilai awal dari obyek
	// 
	
	class Mobil {
		
		private $merek;
		private $warna;
		
		// 
		public function __construct($merek, $warna) {
			$this->merek = $merek;
			$this->warna = $warna;
		}

		public function mengendaraiMobil() {
			return "Sedang mengendarai mobil $this->merek yang berwarna $this->warna <br />";
		}		
		
	}

	$mobilHyundai = new Mobil("Hyundai", "Hijau");
	
	echo $mobilHyundai->mengendaraiMobil(); // Sedang mengendarai mobil Hyundai yang berwarna Hijau 


	$mobilBMW = new Mobil("BMW", "Merah");
	
	echo $mobilBMW->mengendaraiMobil();  // Sedang mengendarai mobil BMW yang berwarna Merah 

?>
		
