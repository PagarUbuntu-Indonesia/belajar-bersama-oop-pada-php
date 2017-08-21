<?php
	// Baik abstract class maupun interface bisa digunakan 
	// untuk membuat banyak class dengan method yang sama
	abstract class Mobil {
		protected $volumeTangki;

		abstract public function hitungJarak();
	}
	
	interface VolumeTangki {
		public function setVolumeTangki($volume);
	}
	
	class Sedan extends Mobil implements VolumeTangki{
		public function hitungJarak() {
			$jarak = $this->volumeTangki * 33;
			return $jarak;
		}
		
		public function setVolumeTangki($volume) {
			$this->volumeTangki = $volume;
		}
	}
	
	class Pickup extends Mobil implements VolumeTangki{
		public function hitungJarak() {
			$jarak = $this->volumeTangki * 30;
			return $jarak;
		}

		public function setVolumeTangki($volume) {
			$this->volumeTangki = $volume;
		}		
	}

	class DobelKabin extends Mobil implements VolumeTangki{
		public function hitungJarak() {
			$jarak = $this->volumeTangki * 35;
			return $jarak;
		}

		public function setVolumeTangki($volume) {
			$this->volumeTangki = $volume;
		}
	}	
	
	//
	function perhitunganJarak($obyekKendaraan) {
		return $obyekKendaraan->hitungJarak();
	}
	
	// 
	$mobilLurah = new Sedan();
	$mobilLurah->setVolumeTangki(12);
	
	$mobilRete = new Pickup();
	$mobilRete->setVolumeTangki(13);
	
	$mobilRewe = new DobelKabin();
	$mobilRewe->setVolumeTangki(16);
	
	// 
	echo "Mobilnya pak lurah " . perhitunganJarak($mobilLurah) . "<br />";
	echo "Mobilnya pak rete " . perhitunganJarak($mobilRete) . "<br />";
	echo "Mobilnya pak rewe " . perhitunganJarak($mobilRewe) . "<br />";
?>