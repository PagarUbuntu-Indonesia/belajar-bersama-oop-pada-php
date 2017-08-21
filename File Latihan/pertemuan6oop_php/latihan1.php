<?php
	// Scope Resolution Operator adalah operator khusus di dalam PHP 
	// yang memungkinkan kita untuk mengakses  informasi khusus dari dalam class.
	// Scope Resolution Operator ditulis dengan tanda dua kali titik dua (double colon), 
	// yakni "::". Untuk mengakses property dan method dari class induk, kita mengaksesnya dengan perintah:
	// parent::nama_property;
	// parent::nama_method();
	
	class Mobil {
		public function lihatSpesifikasi() {
			Return "Spesifikasi Mobil : Toyota Corola, 1400cc, Kuning Langsat <br />";
		}
	}
	
	class Pickup extends Mobil {
		public function lihatSpesifikasi() {
			Return "Spesifikasi Pickup : Toyota Hilux, 1600cc, Hitam dop <br />";
		}
		public function lihatSpesifikasiMobil() {
			Return parent::lihatSpesifikasi(); // ini yang disebut mengakses method parent
		}
		
	}	
	
	$mobilnyaozan = new Pickup();
	
	echo $mobilnyaozan->lihatSpesifikasi();
	
	echo $mobilnyaozan->lihatSpesifikasiMobil();
			
?>
	
	
	
