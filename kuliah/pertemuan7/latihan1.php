<?php 
// Variabel scope / lingkup variabel

// $x = 10;
// echo $x;

// echo "<br>";

// funtion tampilx() {
//     global $x;
//     echo $x;
// }

// tampilx();

// SUPERGLOBALS
// variabel globbal milik PHP
// merupakan array assosiative

// $_GET["nama"] = "Reza Marchyana";
// $_GET["nrp"] = "203040079";
// var_dump($_GET);
// var_dump($_POST);
// var_dump($_SERVER);

$mahasiswa = [
    [
        "nama" => "Reza Marchyana", 
        "nrp" => "203040079", 
        "email" => "email", 
        "jurusan" => "Teknik Informatika",
        "gambar" => "hero.jpg" ],
    [
        "nama" => "Adam", 
        "nrp" => "203040010", 
        "email" => "email", 
        "jurusan" => "Teknik Informatika",
        "gambar" => "hero.jpg" ],
    [
        "nama" => "Ramiel", 
        "nrp" => "203040089", 
        "email" => "email", 
        "jurusan" => "Teknik Informatika",
        "gambar" => "hero.jpg" ]
];
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>GET</title>
</head>
<body>
    <h1>Daftar mahasiswa</h1>
    <ul>
    <?php foreach( $mahasiswa as $mhs ) : ?>
        <li>
        <a href="latihan2.php?nama=<?= $mhs["nama"]; ?>&nrp=<?= $mhs["nrp"]; ?>&email=<?= $mhs["email"]; ?>&jurusan=<?= $mhs["jurusan"]; ?>&gambar=<?= $mhs["gambar"]; ?>"><?= $mhs["nama"]; ?></a>
        </li>
    <?php endforeach; ?>
    </ul>
</body>
</html>