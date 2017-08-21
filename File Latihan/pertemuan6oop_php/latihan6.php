<?php
	// bagian ini kita mempelajari tentang konstanta class
	
	class Mobil {
		// buat konstanta
		const BIAYASEWAPERJAM = "60000";
		
		// buat method
		
		public function sewaMobil($lama) {
			$lama = $lama;
			return "Harga sewa mobil selama $lama jam adalah " . $lama * self::BIAYASEWAPERJAM;
		}
	}
	
	// buat obyek 
	$sewasekarang = new Mobil();
	
	// panggil dari obyek
	echo $sewasekarang->sewaMobil(3) . "<br />";
	
	// panggil dari class
	echo "Harga sewa perjam adalah " . Mobil::BIAYASEWAPERJAM;
			
?>
