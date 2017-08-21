<?php
	
	// 2) fungsi var_dump() dan print_r()
	// pertama kita buat beberapa variabel
	
	$string = "Ini test";
	$integer = 13;
	$array = array('Nabil', 'Melody', 'Dijjah');
	
	// var_dump() gunanya menampilkan tipe dan nilai variabel

	var_dump($integer, $array, is_string($string));

	// hasilnya 

	echo "<br />";
		
	// 
	
	print_r($array);
	
	// hasilnya 

?>
