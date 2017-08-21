<?php
// pengenalan array multidimensional

// kita mendefinisikan array baru
// perhatikan tabel ini
// mobil       stok    terjual
// Honda        20       18
// Suzuki       17       15
// Toyota       18       15
// Daihatsu     25       20


$mobil = array(
	array("Honda", 20, 18),
	array("Suzuki", 17, 15),
	array("Toyota", 18, 15),
	array("Daihatsu", 25, 20)
	);

// trus kita memanggil array tersebut

echo $mobil[0][0] . " stoknya : " . $mobil[0][1] . ", jumlah terjual : " . $mobil[0][2] . "<br />";
echo $mobil[1][0] . " stoknya : " . $mobil[1][1] . ", jumlah terjual : " . $mobil[1][2] . "<br />";
echo $mobil[2][0] . " stoknya : " . $mobil[2][1] . ", jumlah terjual : " . $mobil[2][2] . "<br />";
echo $mobil[3][0] . " stoknya : " . $mobil[3][1] . ", jumlah terjual : " . $mobil[3][2] . "<br /> <br />";

// atau bisa memanggil isi aray pake perulangan
for($baris = 0; $baris < 4; $baris++) {
	echo "<p><strong>Nomor $baris </strong></p>";
	echo "<ul>";
		for($kolom = 0; $kolom < 3; $kolom++) {
			echo "<li>" . $mobil[$baris][$kolom] . "</li>";
		}
		echo "</ul>";
	}
	
// untuk melihat array kita bisa menggunakan fungsi bawaan php print_r()
echo "<strong>Hasil menggunakan fungsi print_r() <br /></strong>";
echo print_r($mobil) . "<br><br>";		
	
?>
