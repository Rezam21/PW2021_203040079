<?php 

// $mahasiswa = [
//     ["Reza Marchyana", "203040079", "teknik Informatika", "Email"],
//     ["Reza Marchyana", "203040079", "teknik Informatika", "Email"]
// ];

// Array Associative
// definisinya sama seperti array numerik, kecuali
// key-nya adalah string yang kita buat sendiri 

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
        "nrp" => "203040079", 
        "email" => "email", 
        "jurusan" => "Teknik Informatika",
        "gambar" => "hero.jpg" ]
];

// echo $mahasiswa [1]["email"];


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Daftar Mahasiswa</title>
</head>
<body>
    
    <h1>Daftar Mahasiswa</h1>


    <?php foreach( $mahasiswa as $mhs ) : ?>
    <ul>
        <li>
            <img src="img/<?= $mhs["gambar"]; ?>">
        </li>
        <li>Nama : <?= $mhs["nama"]; ?></li>
        <li>NRP : <?= $mhs["nrp"]; ?></li>
        <li>Jurusan : <?= $mhs["jurusan"]; ?></li>
        <li>Email : <?= $mhs["email"]; ?></li>
    </ul>
    <?php endforeach; ?>

    

</body>
</html>