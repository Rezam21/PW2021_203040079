<?php 

if (!isset($_GET['id'])) {
    header("location: ../index.php");
    exit;
}

require 'functions.php';

$id = $_GET['id'];

$sepakbola = query("SELECT * FROM sepakbola WHERE id = $id")[0];

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Latihan5a_203040079</title>
    <link rel="stylesheet" href="../css/style.css">
</head>
<body>

    <div class="container">
        <div class="gambar">
            <img src="../assets/img/<?= $sepakbola["gambar"]; ?>">
        </div>
        <div class="keterangan">
            <p><?= $sepakbola["nama"]; ?></p>
            <p><?= $sepakbola["deskripsi"]; ?></p>
            <p><?= $sepakbola["harga"]; ?></p>
            <p class="background-text"><?= $sepakbola["kategori"]; ?></p>
        </div>

        <button class="tombol"><a class="tombol-kembali" href="../index.php">kembali</a></button>
    </div>

</body>
</html>