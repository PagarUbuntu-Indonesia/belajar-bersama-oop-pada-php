<?php
	// dibagian ini kita melihat contoh kalo parrent constructor 
	// dan parrent destructornya dipanggil dari child class
	
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
			parent::__construct();  // nambah baris disini
			echo "ini bagian constructor dari class Pickup <br />";
		}
		
		public function lihatSpesifikasi() {
			Return "Spesifikasi Pickup : Toyota Hilux, 1600cc, Hitam dop <br />";
		}
		
		public function __destruct() {
			echo "ini bagian destructor dari class Pickup <br />";
			parent::__destruct();  // dan disini 
		}
	}	
	
	// turunkan ke class lain lagi
	class DobelKabin extends Pickup {
		public function __construct() {
			parent::__construct();  // nambah baris disini
			echo "ini bagian constructor dari class DobelKabin <br />";
		}
		
		public function lihatSpesifikasi() {
			Return "Spesifikasi Pickup : Hilux Double Cabin, 2200cc, Silver <br />";
		}
		
		public function __destruct() {
			echo "ini bagian destructor dari class DobelKabin <br />";
			parent::__destruct();  // dan disini 
		}
	}	
	
	$mobildijjah = new DobelKabin();
	
	echo $mobildijjah->lihatSpesifikasi();

?>	
