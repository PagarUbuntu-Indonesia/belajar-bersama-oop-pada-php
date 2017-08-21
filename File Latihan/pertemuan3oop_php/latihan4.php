<?php
	// MATH
	// 4) fungsi abs(), min(), max(), pi(), pow(), sqrt(), log(), round(), rand()
	
	// abs()
	var_dump(abs(-21)); // int(21)
	echo "<br />";
	
	// min() max()
	$array1 = array(3, 6, 2, 14, 8, 5, 20, 1);
	var_dump(min($array1)); // int(1)
	echo "<br />";
	var_dump(max($array1)); // int(20)
	echo "<br />";
	
	// pi()
	var_dump(pi()); // float(3.1415926535898)
	echo "<br />";

	// pow()
	var_dump(pow(2,4)); // int(16)
	echo "<br />";
	
	// sqrt()
	var_dump(sqrt(16)); // float(4)
	echo "<br />";
	
	// log()
	var_dump(log(10)); // float(2.302585092994)
	echo "<br />";
	
	// round()
	var_dump(round(3.14)); // float(3) 
	echo "<br />";
	var_dump(round(pi(), 2)); // float(3.14)
	echo "<br />";
	var_dump(round(143257.432, -2)); // float(143300)
	echo "<br />";
	
	// rand()
	var_dump(rand(), rand(1, 100)); // int(418805541), int(32)
	echo "<br />";
	


?>	
