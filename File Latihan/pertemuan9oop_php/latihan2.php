<?php
	
	// sekarang kita panggil lagi

	include('KelasPikap.php');
	
	$mobilGigi = new Pikap(); // PHP Fatal error:  Class 'Pikap' not found in /home/taufiq/LATIHAN OOP PHP/pertemuan9oop_php/latihan2.php on line 7
	
	echo "Sebuah pikapnya gigi dengan merek $mobilGigi->merek berwarna $mobilGigi->warna <br />";
	echo $mobilGigi->jalan() . "<br />";

?>
