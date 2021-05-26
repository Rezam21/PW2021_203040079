<?php 

require 'functions.php';

$sepakbola = query("SELECT * FROM sepakbola")


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
    <link rel="stylesheet" href="../css/style.css">
</head>
<body class="luar">
    <div class="add">
        <a href="tambah.php">Tambah Data</a>
    </div>
    <table border="1" cellpadding="13" cellspacing="0">
        <tr class="top">
            <th >#</th>
            <th>opsi</th>
            <th>Gambar</th>
            <th>Nama</th>
            <th>Deskripsi</th>
            <th>Harga</th>
            <th>Kategori</th>
        </tr>
        <?php $i = 1; ?>
        <?php foreach ($sepakbola as $sb) : ?>
            <tr class="isi">
                <td><?= $i ?></td>
                <td>
                    <a href="ubah.php?id=<?= $sb['id'] ?>"><button class="ubah">Ubah</button></a>
                    <a href="hapus.php?id=<? $sb['id'] ?>" onclick="return confirm('Hapus data??')"><button class="hapus">Hapus</button></a>
                </td>
                <td><img src="../assets/img/<?= $sb['gambar']; ?>" alt=""></td>
                <td><?= $sb['nama']; ?></td>
                <td><?= $sb['deskripsi']; ?></td>
                <td><?= $sb['harga']; ?></td>
                <td><div class="background-text"><?= $sb['kategori']; ?></div></td>
            </tr>
            <?php $i++; ?>
        <?php endforeach; ?>
    </table>
</body>
</html>