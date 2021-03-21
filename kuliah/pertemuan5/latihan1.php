<?php 
// array
// variabel yang dapat memiliki banyak nilai
// pasangan antara key dan value
// key-nya adalah index, yang dimulai dari 0

// membuat array
// cara lama
$hari = array("senin", "selasa", "rabu");

// cara baru
$bulan = ["january", "february", "maret"];

$arr1 = [123, "tulisan", false];

// Menampilkan Array
// var_dump() / print_r()

// var_dump($hari);
// echo "<br>";
// print_r($bulan);
// echo "<br>";

// Menampilkan satu element pada array

// echo $arr1[0];
// echo "<br>";
// echo $bulan[1];

// menambahkan elemen baru pada array

var_dump($hari);
$hari[] = "kamis";
$hari[] = "jum'at";
echo "<br>";
var_dump($hari);





?>