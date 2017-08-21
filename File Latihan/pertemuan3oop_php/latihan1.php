<?php
	// pertemuan 3 
	// FUNGSI BAWAAN PHP
	// pada latihan ini kita akan mempelajari fungsi bawaan yang disediakan PHP (PHP built-in functions)
	
	// FUNGSI VARIABEL
	
	// 1) fungsi empty(), isset(), is_null(), is_array(), is_int(), is_string(), is_numeric()
	
	// pertama kita buat beberapa variabel
	
	$string1 = "Ini test";
	$string2 = '';
	$integer1 = 0;
	$integer2 = NULL;
	$integer3 = 13;
	$anakarray1 = array();
	$anakarray2 = NULL;
	$anakarray3 = array('Nabil', 'Melody', 'Dijjah');
	
	var_dump( empty($string1), empty($anakarray1), empty($gaada));
	
	// hasilnya false, true, true
	
	echo "<br />";
	
	// percobaan is_null()
	var_dump( is_null($string1), is_null($integer1), is_null($anakarray2));
	
	// hasilnya false, false, true

	echo "<br />";
		
	// percobaan isset()
	var_dump( isset($string2, $integer1));
	echo "<br />";
	unset($string2);
	var_dump( isset($string2), isset($integer1));
	
	// hasilnya true, false, true
	
	echo "<br />";
		
	// percobaan is_array()
	
	var_dump(is_array($anakarray1), is_array($anakarray2), is_array($anakarray3));
	
	// hasilnya true, false, true

	echo "<br />";
		
	// percobaan is_int()
	
	var_dump(is_int($integer1), is_int($string1));
	
	// hasilnya true, false

	echo "<br />";
		
	// percobaan is_string()
	
	var_dump(is_string($integer1), is_string($string1));
	
	// hasilnya false, true

	echo "<br />";
		
	// percobaan is_numeric()
	
	var_dump(is_numeric($integer1), is_numeric($integer2), is_numeric($integer3), is_numeric($string1));
	
	// hasilnya true, false, true, false

?>
