<?php
	// bagian ini mempelajari final class
	// final class adalah suatu cara untuk melarang sebuah class
	// diturunkan oleh class lain
	
	final class Mobil {
		public function percobaan() {
			echo "Pemanggilan method Mobil::percobaan() .. <br />";
		}
	}
	
	class Pickup extends Mobil {
		public function percobaanlain() {
			echo "Pemanggilan method Mobil::percobaanlain() gitu <br />";
		}
	}
	
	$mobilnabila = new Pickup();
	
	// hasil
	// Fatal error: Class Pickup may not inherit from final class (Mobil) in - on line 14
?>