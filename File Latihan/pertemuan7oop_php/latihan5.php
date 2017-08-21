<?php
	// class juga bisa mengimplementasi banyak interface
	interface Mobil {
		public function setModel($nama);
		public function getModel();
	}

	interface Kendaraan {
		public function setPunyaRoda($bool);
		public function getPunyaRoda();
	}

	class miniCar implements Mobil, Kendaraan {
		private $model;
		private $punyaRoda;
		
		public function setModel($nama) {
			$this->model = $nama;
		}
		
		public function getModel() {
			return $this->model;
		}
		
		public function setPunyaRoda($bool) {
			$this->punyaRoda = $bool;
		}

		public function getPunyaRoda() {
			return ($this->punyaRoda)? " punya roda " : " ga ada roda !";
		}
	}
	
	$mobilMantan = new miniCar();
	
	$mobilMantan->setModel("Jeep CJ");
	$mobilMantan->setPunyaRoda(true);
	
	echo "Sebuah mobil " . $mobilMantan->getModel() . $mobilMantan->getPunyaRoda() . "<br />";	// Sebuah mobil Jeep CJ punya roda 
	
?>