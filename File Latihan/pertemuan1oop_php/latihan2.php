<?php
// contoh lain dari array

// kita menggunakan perulangan untuk membuat array
$nilaiAwal = 1;
$keles = 2;

for($nilaiAwal; $nilaiAwal <= 10; $nilaiAwal++) {
	$jawaban[$nilaiAwal] = $nilaiAwal * $keles;
}

// sekarang kita sudah memiliki array $jawaban[] 
// kita bisa memanggilnya misalnya
// echo $jawaban[1] ;
// dst

// sekarang kita memanggil seluruh isi array $jawaban

echo "Isi dari array \$jawaban[] adalah <br />" ;

for($nomorArray = 1; $nomorArray <= 10; $nomorArray++) {
	
	echo $jawaban[$nomorArray] . "<br />";
}

?>
