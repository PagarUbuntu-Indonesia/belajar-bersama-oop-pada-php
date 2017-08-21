<?php 
    // hak akses private adalah elemen yang hanya bisa diakses didalam class itu sendiri
    // class turunan dan class lain tidak bisa mengaksesnya
    
    // buat class baru
	class Mobil {

		// 
		private $merek = 'BMW';

		//
        public function akses_merek() {
			return $this->merek;		
		} 		
    }
	    
    // buat class turunan
	class Pickup extends Mobil {	 
        //
        public function akses_merek() {
			return $this->merek;		
		} 		    
    }	    

	// buat obyek dari Mobil
	$mobilbmw = new Mobil();
	$pickupbmw = new Pickup();
 
 	// jalankan method akses_merek()
	echo $mobilbmw->akses_merek() . "<br />"; // BMW
	
	// jalankan method akses_merek()
	echo $pickupbmw->akses_merek() . "<br />"; // Notice:  Undefined property
    
?>
