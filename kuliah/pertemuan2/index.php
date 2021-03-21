<?php 
// ini komentar
/* 
ini juga komentar
*/

// Pertemuan 2 - PHP Dasar
// sintaks PHP

// standar output
// echo, print
// print_r
// var_dump

echo "Reza marchyana";
echo "<br>";
print "Reza marchyana";
echo "<br>";
print_r("Reza marchyana");
echo "<br>";
var_dump("Reza marchyana");
echo "<br>";
echo 123;
echo "<br>";
echo true;
echo "<br>";

// Penulisan sintaks PHP
// 1. PHP di dalam HTMl
// 2. HTML di dalam PHP

// Variabel dan Tipe Data
// Variabel
// tidak boleeh diawali dengan angka, tapi boleh mengandung angka
$nama = "Reza";

// Operator
// aritmatika
// + - * / %
$x = 10;
$y = 20;
echo $x * $y;
echo "<br>";

// penggabung string / concat
//  . 
$nama_depan = "Reza";
$nama_belakang = "Marchyana";
echo $nama_depan . " " . $nama_belakang;
echo "<br>";

// assignment
// =, +=, -=, *=, /=, %=, .=
$x = 1;
$x += 5;
echo $x;
echo "<br>";
$nama = "Reza";
$nama .= " ";
$nama .= "Marchyana";
echo $nama;
echo "<br>";

// perbandingan
// <, >, <=, >=, ==, !=
var_dump(1 < 5);
echo "<br>";
var_dump(1 == "1");
echo "<br>";

// identitas
// ===, !==
var_dump(1 === "1");
echo "<br>";

// logika
// &&, ||, !
$x = 10;
var_dump($x < 20 && $x % 2 == 0);
echo "<br>";

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>belajar PHP</title>
</head>
<body>
    <h1>Halo, Selamat Datang <?php echo $nama; ?></h1>
    <p><?php echo "ini adalah paragraf"; ?></p>

    <?php 
        echo "<h1>Halo, Selamat datang Reza</h1>"
    ?>
</body>
</html>