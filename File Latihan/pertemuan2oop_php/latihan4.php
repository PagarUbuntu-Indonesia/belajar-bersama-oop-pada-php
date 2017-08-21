<?php
	// di latihan ini kita akan mempelajari default parameter dan variabel parameter
	
	// perhatikan percobaan default parameter berikut 
	
	function set_tinggi($tinggi_minimal = 165) {
		echo "Tinggi si dia adalah : $tinggi_minimal cm <br />";
	}
	
	//
	
	set_tinggi(172); // 172
	set_tinggi();    // 165
	set_tinggi(168); // 168
	set_tinggi(175); // 175
	set_tinggi();    // 165
	
	// default parameter adalah ketika parameter tidak kita masukan saat pemanggilan fungsi
	// maka akan menggunakan nilai default, pada contoh ini 165
	
	// =================================
	// percobaan default parameter kedua
	
	function pangkat($nilai, $pangkat = 2) {
		$hasil=1;
		for ($i = 1; $i <= $pangkat; $i++) {
			  $hasil = $hasil * $nilai;
		   }
		return $hasil;
	}
	
	echo "Pangkat dari (7) adalah      = " . pangkat(7) . "<br />";  // 49
	echo "Pangkat dari (6) adalah      = " . pangkat(6) . "<br />";  // 36
	echo "Pangkat dari (2, 9) adalah   = " . pangkat(2, 9) . "<br />";  // 512
	echo "Pangkat dari (3.2, 4) adalah = " . pangkat(3.2, 4) . "<br />";  // 104.8576
	
	// jika nilai pangkat tidak dimasukkan, maka menggunakan nilai default 2
	
	
	// =================================
	// percobaan ketiga variabel parameter
	
	function penjumlahan_deret() {
		$jumlah_deret = func_num_args();
		
		//
		$nilai = 0;
		
		//
		for ($i = 0; $i < $jumlah_deret; $i++) {
			$nilai += func_get_arg($i);
		}
		
		//
		return $nilai;
	}
	
	//
	echo "Penjumlahan (1, 2, 3) = " . penjumlahan_deret(1, 2, 3) . "<br />";  // 6
	echo "Penjumlahan (8, 7, 6, 5, 4, 3, 2, 1) = " . penjumlahan_deret(8, 7, 6, 5, 4, 3, 2, 1) . "<br />";  // 36
	echo "Penjumlahan (22, 13, 33, 15, 7, 19, 31, 4) = " . penjumlahan_deret(22, 13, 33, 15, 7, 19, 31, 4) . "<br />";  // 144
	
?>	
