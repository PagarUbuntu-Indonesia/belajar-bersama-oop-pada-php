<?php
// contoh kedua array multidimensional

// kita masih menggunakan array $mobil[]
// perhatikan tabel ini
// mobil       stok    terjual
// Honda        20       18
// Suzuki       17       15
// Toyota       18       15
// Daihatsu     25       20

$mobil = array(
			0 => array(
					0 => "Honda",
					1 => 20,
					2 => 18 ),
			
			1 => array(
					0 => "Suzuki",
					1 => 17,
					2 => 15 ),
					
			2 => array(
					0 => "Toyota",
					1 => 18,
					2 => 15 ),
			
			3 => array(
					0 => "Daihatsu",
					1 => 25,
					2 => 20 ) );

					
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
	
// untuk melihat array kita bisa menggunakan fungsi bawaan php var_dump()
echo "<strong>Hasil menggunakan fungsi var_dump() <br /></strong>";
echo var_dump($mobil) . "<br><br>";	
	
?>
