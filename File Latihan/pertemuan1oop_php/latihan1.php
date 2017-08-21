<?php

// misalkan kita membutuhkan banyak variabel tanpa menggunakan array
// kode php nya seperti berikut

$barang1 = "tas";
$barang2 = "buku";
$barang3 = "topi";
$barang4 = "smartphone";

// dst

echo "Daftar Barang <br />";
echo "1. " . $barang1 . "<br />";
echo "2. " . $barang2 . "<br />";
echo "3. " . $barang3 . "<br />";
echo "4. " . $barang4 . "<br /><br />";


// contoh penggunaan array
// contoh penulisan array yang pertama
$barang2kuliah 	= array("kaos", "kemeja", "sepatu kets");

// sehingga cara manggilnya 
echo "Daftar Pakaian <br />";
echo "1. " . $barang2kuliah[0] . "<br />";
echo "2. " . $barang2kuliah[1] . "<br />";
echo "3. " . $barang2kuliah[2] . "<br /><br />";


// contoh penulisan array yang kedua menggunakan pasangan key and value
$barang2kost = array(1 => "PC", 2 => "Meja Belajar", 3 => "Lemari Pelasitik");

// atau bisa ditulis seperti ini 

// $barang2kost = array(
// 		1 => "PC", 
//		2 => "Meja Belajar", 
//		3 => "Lemari Pelasitik"
//		);

// sehingga cara manggilnya 
echo "Daftar Barang Kost <br />";
echo "1. " . $barang2kost[1] . "<br />";
echo "2. " . $barang2kost[2] . "<br />";
echo "3. " . $barang2kost[3] . "<br /><br />";


// contoh penulisan array ketiga menggunakan pasangan keynya string
$nilaikuliahku = array(
	"Pancasila" => 60,
	"Agama Islam" => 65,
	"Algoritma" => 55,
	"Pengantar TI" => 45 ); 
	
// penulisan diatas sama juga seperti ini
// $nilaikuliahku = array();
// 	$nilaikuliahku["Pancasila"] = 60;
// 	$nilaikuliahku["Agama Islam"] = 65;
// 	$nilaikuliahku["Algoritma"] = 55;
// 	$nilaikuliahku["Pengantar TI"] = 45;
	
	
// sehingga cara manggilnya 
echo "Daftar Nilai <br />";
echo "1. Pancasila " . $nilaikuliahku["Pancasila"] . "<br />";
echo "2. Agama Islam " . $nilaikuliahku["Agama Islam"] . "<br />";
echo "3. Algoritma " . $nilaikuliahku["Algoritma"] . "<br />";
echo "4. Pengantar TI " . $nilaikuliahku["Pengantar TI"] . "<br /><br />";


// contoh penulisan array yang empat

$arrayMusim = array();

$arrayMusim[] = "Hujan";
$arrayMusim[] = "Panas";
$arrayMusim[] = "Rambutan";
$arrayMusim[] = "Kawin"; // jomblo jangan baper :v

// cara manggil array nya

echo "Daftar Musim <br />";
echo "1. " . $arrayMusim[0] . "<br />";
echo "2. " . $arrayMusim[1] . "<br />";
echo "3. " . $arrayMusim[2] . "<br />";
echo "4. " . $arrayMusim[3] . "<br /><br />";



?>
