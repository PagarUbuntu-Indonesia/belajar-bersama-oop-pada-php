<?php
	// bagian ini mempelajari final method
	// final method adalah suatu cara untuk melarang sebuah method
	// di overriding (menimpa) oleh class turunannya
	
	class Mobil {
		public function percobaan() {
			echo "Pemanggilan method Mobil::percobaan() .. <br />";
		}
	
		final public function percobaanlain() {
			echo "Pemanggilan method Mobil::percobaanlain() lagi <br />";
		}
	}
	
	class Pickup extends Mobil {
		public function percobaanlain() {
			echo "Pemanggilan method Mobil::percobaanlain() gitu <br />";
		}
	}
	
	$kendaraanjon = new Pickup();
	
	// hasil
	// Fatal error: Cannot override final method Mobil::percobaanlain() in - on line 16

?>