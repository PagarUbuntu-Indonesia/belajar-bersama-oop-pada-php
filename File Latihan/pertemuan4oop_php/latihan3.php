<?php

	// Enkapsulasi
	// Enkapsulasi adalah metoda untuk mengatur struktur class
	// dengan cara menyembunyikan alur kerja dari class tersebut
	// disebut juga 'information hidding'
	
	// ada 3 jenis kata kunci untuk menyembunyikan properti atau method class
	// public, protected, private
	
	// 1) hak akses protected
	// saat properti dan method didefinisikan sebagai protected, berarti tidak
	// bisa diakses dari luar class, hanya bisa diakses dari dalam class itu sendiri
	// atau turunan class tersebut
	
	// berikut contoh protected
	
	class Mobil {

		// buat property protected
		protected $merek;
		protected $warna = 'beige';
		protected $adaSunRoofNya = true; 		
		
		// buat method protected
		protected function jalan() {
			return "Horee.. mobilnya bisa jalan..!!";
		}		
	}
	
	// buat obyek dari Mobil
	$mobilbmw = new Mobil();
	
	// set property yang diinginkan
	$mobilbmw->merek = 'BMW'; // akan menghasilkan error
	
	// tampilkan properti
	echo "Sebuah mobil bermerek " . $mobilbmw->merek . " berwarna " . $mobilbmw->warna . ". <br />"; // akan menghasilkan error
	
	// panggil method
	echo $mobilbmw->jalan() . "<br />";

	// harap pindah ke latihan4.php
?>
	 	
	
