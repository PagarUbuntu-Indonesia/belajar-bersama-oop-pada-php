<?php
	// file ini mempelajari default parameter
	
	class Mobil {
		
		public function mengendaraiMobil($merek = "Hyundai", $warna="Hijau") {
			return "Sedang mengendarai mobil $merek yang berwarna $warna <br />";
		}
	}
	
	$mobilBMW = new Mobil();
	
	echo $mobilBMW->mengendaraiMobil(); // Sedang mengendarai mobil Hyundai yang berwarna Hijau 
	
	echo $mobilBMW->mengendaraiMobil("BMW", "Kuning"); // Sedang mengendarai mobil BMW yang berwarna Kuning 

?>

		
			
