<?php
    // lanjutan protected, walaupun tidak bisa diakses dari luar class
    // tetapi bisa diakses dari dalam class itu sendiri
	
	class Mobil {

		// buat property protected
		protected $merek = 'BMW';

        // buat fungsi lain untuk mengakses properti yang bersifat protected
        public function akses_merek() {
			return $this->merek;		
		}
		
		// buat method protected
		protected function jalan() {
			return "Horee.. mobilnya bisa jalan..!!";
		}	
		
		// buat fungsi lain untuk mengakses method yang bersifat protected
		public function paksa_jalan() {
			return $this->jalan();
		}	
	}
	
	// buat obyek dari Mobil
	$mobilbmw = new Mobil();
		
	// jalankan method akses_merek()
	echo $mobilbmw->akses_merek() . "<br />";
	
	// jalankan method paksa_jalan()
	echo $mobilbmw->paksa_jalan() . "<br />";

?>
	 	
	
