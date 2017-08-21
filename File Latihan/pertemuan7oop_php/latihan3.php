<?php
	// bagian ini mempelajari abstrac class
	// abstract class adalah sebuah kelas yang
	// tidak bisa dijadikan obyek (instansiasi)
	// hanya berguna sebagai kerangka dasar
	// abstract method adalah method dasar yang harus
	// diimplementasikan ulang pada class turunan
	
	// buat abstract class
	abstract class Mobil {
		protected $volumeTangki;
		
		public function setVolumeTangki($volume) {
			$this->volumeTangki = $volume;
		}
		
		abstract public function hitungJarak() ;
	}
	
	class Honda extends Mobil {
		public function hitungJarak() {
			$jarak = $this->volumeTangki * 30;
			return $jarak;
		}
	}
	
	class Toyota extends Mobil {
		public function hitungJarak() {
			$jarak = $this->volumeTangki * 33;
			return $jarak;
		}
		
		public function ambilWarna() {
			return "Hijau Daun";
		}	
	}
	
	$mobilorang = new Toyota();
	$mobilorang->setVolumeTangki(10);
	
	echo $mobilorang->hitungJarak() . "<br />"; // 330
	echo $mobilorang->ambilWarna(); // hijau daun
?>