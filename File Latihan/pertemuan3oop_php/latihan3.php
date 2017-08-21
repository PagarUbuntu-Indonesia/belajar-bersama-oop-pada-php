<?php
	// STRING
	// 3) fungsi addslashes(), stripslashes(), nl2br(), wordwrap(), explode(), implode(), printf()
	
	// kita buat variabel
	
	$string = 'Kutipan hari ini, "Cmungudh Mblo..!!!, ~anonymouse"<br />';
	echo $string;
	
	// addslashes()
	
	$string = addslashes($string);
	echo $string;
	
	// stripslashes()
	$string = stripcslashes($string);
	echo $string;
	
	//
	
	$string2 = "Cowok jomblo ngumpulnya di kanal irc ...!!";
	
	// chunk_split()
	
	$string2 = chunk_split($string2, 3);
	
	var_dump($string2);
	
	// nl2br()
	
	echo nl2br($string2);
	
	//
	
	$string3 = "Trus kita-kita harus bilang weew gitu, weeww!!";
	
	// wordwrap()
	
	$string3 = wordwrap($string3, 8);
	echo nl2br($string3);
	echo "<br />";
	
	//
	
	$explodeindong = '30-5-2017';
	
	// explode()
	$arrayexplode = explode('-', $explodeindong);
	
	print_r($arrayexplode);
	echo "<br />";
	
	//
	
	$implodeindong = array('Cowok', 'yang', 'betah', 'menjomblo', 'mungkin', 'pernah', 'bersungguh-sungguh', 'menyintai', 'tapi', 'akhirnya', 'dikecewain', '~ion');
	
	// implode()
	$hasilimplode = implode(' ', $implodeindong);
	
	echo $hasilimplode;
	echo "<br />";
	
	//
	
	$string2 = 'raisa';
	
	// printf()
	
	printf("Saya pikir, %s akan menyesal memilih hamish daud dibanding saya", $string2);
	echo "<br />";	
		
?>
