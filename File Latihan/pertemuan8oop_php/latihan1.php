<?php
    // Dari segi bahasa, polimorfosis (bahasa inggris: Polymorphism) berasal dari 
	// dua kata bahasa latin yakni poly dan morph. Poly berarti banyak, dan 
	// morph berarti bentuk. Polimorfisme berarti banyak bentuk
	// polimorfosis adalah cara memanggil banyak class yang memiliki signature method yang sama
	
	abstract class Mobil {
		protected $volumeTangki;
		
		public function setVolumeTangki($volume) {
			$this->volumeTangki = $volume;
		}
		
		abstract public function hitungJarak();
	}
	
	class Sedan extends Mobil {
		public function hitungJarak() {
			$jarak = $this->volumeTangki * 33;
			return $jarak;
		}
	}
	
	class Pickup extends Mobil {
		public function hitungJarak() {
			$jarak = $this->volumeTangki * 30;
			return $jarak;
		}
	}

	class DobelKabin extends Mobil {
		public function hitungJarak() {
			$jarak = $this->volumeTangki * 35;
			return $jarak;
		}
	}	
	
	// bikin fungsi untuk menjalankan polimorposis
	// fungsi ini menerima argumen berupa obyek
	function perhitunganJarak($obyekKendaraan) {
		return $obyekKendaraan->hitungJarak();
	}
	
	// buat obyek baru
	$mobilLurah = new Sedan();
	$mobilLurah->setVolumeTangki(12);
	
	$mobilRete = new Pickup();
	$mobilRete->setVolumeTangki(13);
	
	$mobilRewe = new DobelKabin();
	$mobilRewe->setVolumeTangki(16);
	
	// tampilin 
	echo "Mobilnya pak lurah " . perhitunganJarak($mobilLurah) . "<br />";
	echo "Mobilnya pak rete " . perhitunganJarak($mobilRete) . "<br />";
	echo "Mobilnya pak rewe " . perhitunganJarak($mobilRewe) . "<br />";
?>