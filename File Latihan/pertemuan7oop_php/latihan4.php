<?php
	// Object Interface adalah sebuah ‘kontrak’ atau perjanjian implementasi method.
	// Bagi class yang menggunakan object interface, class tersebut harus 
	// mengimplementasikan ulang seluruh method yang ada di dalam interface.
	
	interface Mobil {
		public function setModel($nama);
		public function getModel();
	}
	
	class miniCar implements Mobil {
		private $model;
		
		public function setModel($nama) {
			$this->model = $nama;
		}
		
		public function getModel() {
			return $this->model;
		}
	}
	
	$mobilTetangga = new miniCar();
	
	$mobilTetangga->setModel("Lamborjini Spider");
	
	echo $mobilTetangga->getModel() . "<br />"; // Lamborjini Spider

?>