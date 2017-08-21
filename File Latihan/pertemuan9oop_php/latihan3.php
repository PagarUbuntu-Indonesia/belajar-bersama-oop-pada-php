<?php
	
	// sekarang kita panggil lagi

	include('KelasPikap.php');
	
	$mobilGigi = new jelajah\Pikap(); 
	
	echo "Sebuah pikapnya gigi dengan merek $mobilGigi->merek berwarna $mobilGigi->warna <br />";
	echo $mobilGigi->jalan() . "<br />";

?>
