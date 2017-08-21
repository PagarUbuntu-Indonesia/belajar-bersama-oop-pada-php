<?php

  // dalam konsep oop class adalah cetak biru dari obyek
  // sebelum membuat obyek kita harus membuat class nya dahulu
  // setelah itu kita bisa membuat banyak obyek dari class tersebut
  
  // berikut contoh membuat class
  
  class Mobil {
	  
	 // nama classnya Mobil
	 
	 // properti adalah ciri-ciri dari sebuah obyek
	 // misalnya obyek mobil memiliki ciri-ciri : Warna, Merek, dll
	 
	 // berikut cara membuat property class
	 
	 public $merek;
	 public $warna = 'beige';
	 public $adaSunRoofNya = true; 
	 
	 
	 // method adalah perilaku yang dimiliki obyek
	 // misalnya obyek mobil memiliki perilaku jalan, belokkanan, belok kiri, dst
	 
	 // berikut cara membuat method class
	 
	 public function jalan() {
		 return "Horee.. mobilnya bisa jalan..!!";
	 }
	 
	 public function belokKanan() {
		 return "Putar kekanan hei.. nona manis putarlah kekanan.. kekanan dan kekanan manise..";
	 }
	 
	 public function belokKiri() {
		 return "Putar kekiri hei.. nona manis putarlah kekiri.. kekiri dan kekiri manise..";
	 }
  }  // ini tutup kurung dari class Mobil

  // proses membuat obyek dari class disebut instansiasi
  // obyek tersebut akan disimpan di variabel

  // berikut kita akan membuat 3 buah obyek dari kelas Mobil
  
  $bmw = new Mobil();
  $suzuki = new Mobil();
  $toyota = new Mobil();
  
  // cara mendapatkan nilai properti
  // misalnya kita mau mengambil nilai warna dari masing2 mobil
  
  echo $bmw->warna . "<br />";
  echo $suzuki->warna . "<br />";
  echo $toyota->warna . "<br />";
  
  // cara menset nilai properti
  $bmw->warna = 'biru';
  $suzuki->warna = 'kuning pisang';
  
  $bmw->merek = 'BMW';
  $suzuki->merek = 'Susuka';
  $suzuki->merek = 'Toyota';
  
  // cara memanggil method
  
  echo "sebuah mobil " . $bmw->merek . " sedang " . $bmw->jalan() . " di jalan tol <br />";
  echo "sebuah mobil " . $suzuki->merek . " sedang " . $bmw->belokKanan() . " di perumahan elit <br />";
  echo "sebuah mobil " . $toyota->merek . " sedang " . $bmw->belokKiri() . " di gang sempit <br />";
  
?>  
