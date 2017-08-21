<?php
	// bagian ini mempelajari penerapan static properti dan static method
	
	class Onderdil {
		static public $jumlahmobil = 0; 
		
		static public function tambah1Mobil() {   
			self::$jumlahmobil++;
		}
	}	

	echo Onderdil::$jumlahmobil . "<br />";
	
	Onderdil::tambah1Mobil();
	
	echo Onderdil::$jumlahmobil . "<br />";
	
	Onderdil::tambah1Mobil();
	
	echo Onderdil::$jumlahmobil . "<br />";

	Onderdil::tambah1Mobil();
	
	echo Onderdil::$jumlahmobil . "<br />";	

?>
