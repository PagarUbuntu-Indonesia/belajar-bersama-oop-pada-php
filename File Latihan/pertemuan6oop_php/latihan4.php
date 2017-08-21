<?php
	// pada latihan ini kita pelajarin static properti dan static method
	// Static property dan static method adalah property (variabel) dan 
	// method (function) yang melekat kepada class, bukan kepada objek.
	
	// contoh

	class Onderdil {
		static public $jumlahmobil = 0; // static properti
		
		static public function tambahMobil($int) {   // static method
			$int = (int)$int;
				self::$jumlahmobil += $int;
		}
	}
	
	echo Onderdil::$jumlahmobil . "<br />";
	
	Onderdil::tambahMobil(3);
	
	echo Onderdil::$jumlahmobil . "<br />";
	
	Onderdil::tambahMobil(-1);
	
	echo Onderdil::$jumlahmobil . "<br />";	
?>	
