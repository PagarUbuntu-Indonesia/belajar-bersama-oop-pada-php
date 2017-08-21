<?php 
    // dalam php $this disebut pseudo variable 
    // $this merujuk ke obyek ketika kita mengaksesnya dari dalam class

    // buat sebuah class baru
	class Mobil {

		public $merek = 'BMW';
		
		public function jalan() {
            return "Sedang menjalankan mobil milik $this->merek <br />";
        }
	}
	
	// buat obyek dari class
	$mobilbaru = new Mobil();
	
	echo $mobilbaru->jalan(); // panggil method
	
	$mobilbaru->merek = "Toyota"; // set ulang properti
	
	echo $mobilbaru->jalan(); // panggil ulang method
	
	// buat obyek lain lagi
	$mobilbekas = new Mobil();

	echo $mobilbaru->jalan(); // panggil lagi method

	// KET
	// pertama kali dipanggil, properti berisi 'BMW'
	// saat diset menjadi 'Toyota' dan ketika membuat obyek baru
	// menjadi 'Toyota' itulah kegunaan dari lexical $this
?>
