<?php
// fungsi bawaan php untuk mengelola array
// kita hanya akan mempelajari 3 buah fungsi bawaan php untuk mengelola array 
// *sisanya pelajarin sendiri :P *
// - array_map()    contohnya kita akan mengambil kolom merek untuk > php 5.5 pake fungsi array_colomn()
// - array_key()    berguna untuk menampilkan semua key nya aja yang ada di array
// - array_chunk()

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

					
// contoh penggunaan array_map()

// kita akan mengambil merek menggunakan fungsi array_map()
// kita buat variabel baru untuk menampung merek

$merekMobil = array_map(create_function('$arraynyoba', 'return $arraynyoba[0];'), $mobil);

echo "<strong>Hasil menggunakan fungsi array_map() <br /></strong>";
print_r($merekMobil);
echo "<br /><br />";


// contoh penggunaan array_key()

echo "<strong>Hasil menggunakan fungsi array_key() <br /></strong>";
print_r(array_keys($mobil));
echo "<br /><br />";

// contoh penggunaan array_chunk()

echo "<strong>Hasil menggunakan fungsi array_chunk() <br /></strong>";
print_r(array_chunk($mobil, 2));
echo "<br /><br />";

echo "<strong>Hasil menggunakan fungsi array_chunk() <br /></strong>";
print_r(array_chunk($mobil, 1));
echo "<br /><br />";

?>
