<?php
	// dibagian ini kita belajar membuat class turunan dari class lain
	// class induk disebut base class/ parrent class
	// class turunannya disebut child class
	// jumlah class turunan tidak dibatasi
	// contoh kita membuat class Mobil lalu kita membuat class Pickup yang turunan dari class Mobil
	// lalu kita membuat class DobelKabin yang turunan dari Pickup
	
	class Mobil {
	
		protected function mengendaraiMobil() {
			return "Sedang mengendarai mobil  <br />";
		}
	}
	
	//
	class Pickup extends Mobil {
		protected function mengendaraiPickup() {
			return "Sedang mengendarai pickup  <br />";
		}
	}
	
	// 
	class DobelKabin extends Pickup {
		protected function mengendaraiDobelKabin() {
			return "Sedang mengendarai dobel kabin  <br />";
		}	
		
		public function kendaraiSemua() {
			$a = $this->mengendaraiMobil();
			$b = $this->mengendaraiPickup();
			$c = $this->mengendaraiDobelKabin();
			return $a . $b . $c;
		}
	}
	
	// buat obyek baru
	
	$DobelKabinBaru = new DobelKabin();
	
	echo $DobelKabinBaru->kendaraiSemua();
	
?>				
