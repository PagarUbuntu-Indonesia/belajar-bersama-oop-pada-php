<?php
	// Pada latihan ini kita akan mempelajari VARIABLE SCOPE
	
	// misalnya kita mempunyai sebuah variabel diluar fungsi
	$nilai1 = 10;
 
	// trus kita coba membuat sebuah fungsi yang berisi dua variabel
	function latihan() {
	   $nilai1 = 13;
	   $nilai2 = 9;
	}
 
	// trus kita coba memanggil fungsi
	latihan();
	
	// trus kita mencoba menampilkan nilai dari variabel
	echo $nilai1 . "<br />"; // 10
	echo $nilai2 . "<br />"; // error:notice
	
	// pada saat kita memanggil variabel $nilai1 dari luar fungsi akan ditampilkan 10
	// karna variabel yang dipanggil adalah yang diluar fungsi
	// tetapi pada saat kita memanggil variabel $nilai2 dari luar fungsi tidak bisa ditampilkan
	// karna nilai2 adalah milik dari fungsi latihan()

    // ===============================================
    
    // percobaan kedua
    
    $nilai3 = 6;
    
    //
    
    function latihan2() {
		$nilai4 = 11;
		
		echo $nilai3 . "<br />"; // error:notice
		echo $nilai4 . "<br />"; // 11
	}
	
	//
	
	latihan2();
	
	
    // ketika kita melakukan pemanggilan variabel $nilai3 dari dalam fungsi latihan2()
    // akan ada pesan error karna dari dalam fungsi tersebut tidak ditemukan variabel yang dimaksud
    
    // ===============================================
    
    // percobaan ketiga
    // pengertian variabel global
    
    $nilai5 = 9;
    
    function latihan3() {
		global $nilai5;
		global $nilai6;
		
		$nilai6 = 17;
		
		echo $nilai5 . "<br />"; // 9
		echo $nilai6 . "<br />"; // 17
	}
    
    // 
    latihan3();
	echo $nilai5 . "<br />"; // 9
	echo $nilai6 . "<br />"; // 17
    
    // ketika variabel didefinisikan sebagai global, maka bisa diakses dari dalam atau
    // dari luar fungsi

    // ===============================================    
    
    // percobaan keempat
    // pengertian variabel static
    
    
    function tampil_nambah() {
		static $nambah = 4;
		$nambah = $nambah + $nambah;
		
		//
		echo "Ini penambahan ke $nambah <br />";
	}
	
	tampil_nambah(); // 8
	tampil_nambah(); // 16
	tampil_nambah(); // 32
	tampil_nambah(); // 64
	tampil_nambah(); // 128
	tampil_nambah(); // 256
	tampil_nambah(); // 512
	tampil_nambah(); // 1024
	tampil_nambah(); // 2048
    
    // saat variabel didefinisikan sebagai static, maka variabel tersebut 
    // akan terus mempertahankan nilainya disetiap kali pemanggilan
    
?>
