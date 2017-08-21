<?php
    // lanjutan protected, walaupun tidak bisa diakses dari luar class
    // tetapi bisa diakses dari dalam class itu sendiri
	
	class Mobil {

		// buat property protected
		protected $merek = 'BMW';

		// buat method protected
		protected function jalan() {
			return "Horee.. mobilnya bisa jalan..!!";
		}			

    }
	
	class Pickup extends Mobil {

        // buat fungsi untuk mengakses properti parrent class yang protected
        public function akses_merek() {
			return $this->merek;		
		}  

		// buat fungsi lain untuk mengakses method parrent class yang bersifat protected
		public function paksa_jalan() {
			return $this->jalan();
		}			
	}

	
	// buat obyek dari Mobil
	$mobilbmw = new Pickup();
		
	// jalankan method akses_merek()
	echo $mobilbmw->akses_merek() . "<br />";
	
	// jalankan method paksa_jalan()
	echo $mobilbmw->paksa_jalan() . "<br />";
	

	

?>
	 	
	
