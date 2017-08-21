<?php

	// fungsi dalam bahasa PHP adalah potongan kode yang dapat 
	// melakukan tugas tertentu
	// 1) berikut ini kita akan mencoba membuat fungsi tanpa parameter
	
	// cara menampilkan pesan error pertama
	
	tampil_pesan_error1();
	
	// cara pembuatan fungsi pertama
	
	function tampil_pesan_error1() {
		echo "Ditemukan kesalahan ..<br />";
	}
	
	
	// 2) berikut kita membuat fungsi dengan parameter
	
	$pesan_error = "Ditemukan kesalahan kedua .. <br /><br />";
	
	// kita panggil fungsi kedua
	
	tampil_pesan_error2($pesan_error);
	
	// kita buat fungsi kedua
	
	function tampil_pesan_error2($pesan) {
		echo $pesan;
	}


	// 3) berikut contoh fungsi yang mengembalikan nilai kepada pemanggilnya
	
	// contoh kita buat pemanggilan fungsi
	echo "<strong>Fungsi Penjumlahan</strong><br />";
	echo "5 + 10 = " . penjumlahan(5, 10) . "<br />";
	echo "7 + 13 = " . penjumlahan(7, 13) . "<br />";
	echo "2 + 4 = " . penjumlahan(2, 4) . "<br />";
	
	// trus kita buat fungsi ketiga
	function penjumlahan($angka1, $angka2) {
		$hasil = $angka1 + $angka2;
		return $hasil;
	}
?>
