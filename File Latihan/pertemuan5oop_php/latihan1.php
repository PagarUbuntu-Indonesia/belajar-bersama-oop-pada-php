<?php

	class Mobil {
		
		public $tangki;
		//
		public function isiTangki($banyaknya) {
			$this->tangki += $banyaknya;
			return $this;
		}
		
		//
		public function berkendara($banyaknya) {
			$km = $banyaknya;
			$liter = $km/30;
			$this->tangki -= ($liter);
			
			return $this;
		}
		
	}
	
	
	$toyota = new Mobil();
	
	//
	$tangki = $toyota->isiTangki(10)->berkendara(90)->tangki;
	
	// tampilkan hasilnya 
	echo "Banyaknya jumlah liter tersisa di  tangki adalah " . $tangki . " liter<br />";

?>	
