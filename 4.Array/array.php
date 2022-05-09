<?php
// Array => sebuah variabel yang dapat memiliki banyak niai 
// nilai dalam array disebut element
/* Array memiliki pasangan antara key dan value
1. key adalah index, yang dimulai dari 0
2. value adalah isi/nilai dari array
*/


// Membuat Array - Cara Lama
$hari= array ("senin", "selasa", "rabu");

// Membuat array - cara baru
$bulan = ["januari", "Februari", "Maret"];

// elemet pada array boleh memiliki tipe data yg berbeda
$array = [123, "string", false];

// Menampilkan array di client browser
// bisa menggunakan var_dump() atau print_r()
echo "<h5>Menampilkan Array</h5>";
var_dump($hari);
echo "</br>";
print_r($bulan);
echo "</br>";

// Menampilkan 1 element pada array
echo "<h5>Menampilkan 1 Element Array</h5>";
echo $array[1];
echo "</br>";
echo $bulan[2];

// Menambah element Pada Array
echo "<h5>Menambahkan element Array</h5>";
var_dump($hari);
$hari[] = "Kamis";
echo "</br>";
var_dump($hari);
?>