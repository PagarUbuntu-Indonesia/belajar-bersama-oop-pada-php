<?php
	// pada php-in namespaces dibagi menjadi 2 .. yaitu global namespaces
	// dan relative namespaces
	
	// 1 Global Namespaces
	// Global namespace sendiri sebenarnya hanya sebuah istilah untuk 
	// "class tanpa deklarasi namespace" atau normal class. 
	// Global namespace ini tanpa sadar telah kita gunakan sehari-hari.

	// perhatikan latihan berikut
	include('KelasMobil.php');
	
	$mobilRapiAhmad = new Mobil();
	
	echo "Sebuah mobilnya rapi ahmad dengan merek $mobilRapiAhmad->merek berwarna $mobilRapiAhmad->warna <br />";
	echo $mobilRapiAhmad->jalan() . "<br />";

?>
