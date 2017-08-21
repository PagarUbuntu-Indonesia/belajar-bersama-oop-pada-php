<?php

	// Enkapsulasi
	// Enkapsulasi adalah metoda untuk mengatur struktur class
	// dengan cara menyembunyikan alur kerja dari class tersebut
	// disebut juga 'information hidding'
	
	// ada 3 jenis kata kunci untuk menyembunyikan properti atau method class
	// public, protected, private
	
	// 1) hak akses public
	// ketika property atau method dinyatakan sebagai public 
	// maka seluruh kode diluar class bisa mengaksesnya,
	// termasuk class turunan
	
	// berikut contohnya
	
	class Mobil {

		// buat property publicnya
		public $merek;
		public $warna = 'beige';
		public $adaSunRoofNya = true; 		
		
		// buat method public
		public function jalan() {
			return "Horee.. mobilnya bisa jalan..!!";
		}		
	}
	
	// buat obyek dari Mobil
	$mobilbmw = new Mobil();
	
	// set property yang diinginkan
	$mobilbmw->merek = 'BMW';
	
	// tampilkan properti
	echo "Sebuah mobil bermerek " . $mobilbmw->merek . " berwarna " . $mobilbmw->warna . ". <br />";
	
	// panggil method
	echo $mobilbmw->jalan() . "<br />";
?>
	 	
	
