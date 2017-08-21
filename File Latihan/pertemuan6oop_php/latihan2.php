<?php
	// bagian ini kita mempelajari tentang overriden constructor dan overiden descructor
	// saat child class memiliki constructor dan destructor  maka constructor dan destructor 
	// class induknya tidak dijalankan.
	
	class Mobil {
		public function __construct() {
			echo "ini bagian constructor dari class Mobil <br />";
		}
		
		public function lihatSpesifikasi() {
			Return "Spesifikasi Mobil : Toyota Corola, 1400cc, Kuning Langsat <br />";
		}
		
		public function __destruct() {
			echo "ini bagian destructor dari class Mobil <br />";
		}
	}	
	
	// turunkan ke class Pickup
	class Pickup extends Mobil {
		public function __construct() {
			echo "ini bagian constructor dari class Pickup <br />";
		}
		
		public function lihatSpesifikasi() {
			Return "Spesifikasi Pickup : Toyota Hilux, 1600cc, Hitam dop <br />";
		}
		
		public function __destruct() {
			echo "ini bagian destructor dari class Pickup <br />";
		}
	}	
	
	// turunkan ke class lain lagi
	class DobelKabin extends Pickup {
		public function __construct() {
			echo "ini bagian constructor dari class DobelKabin <br />";
		}
		
		public function lihatSpesifikasi() {
			Return "Spesifikasi Pickup : Hilux Double Cabin, 2200cc, Silver <br />";
		}
		
		public function __destruct() {
			echo "ini bagian destructor dari class DobelKabin <br />";
		}
	}	
	
	$mobildijjah = new DobelKabin();
	
	echo $mobildijjah->lihatSpesifikasi();
	
	// hasilnya :
	// ini bagian constructor dari class DobelKabin
	// Spesifikasi Pickup : Hilux Double Cabin, 2200cc, Silver
	// ini bagian destructor dari class DobelKabin
?>
