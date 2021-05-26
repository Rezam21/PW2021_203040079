<?php

session_start();

if (!isset($_SESSION["username"])) {
    header("Location: login.php");
    exit;
}

require 'functions.php';


if (isset($_GET['cari'])) {
    $keyword = $_GET['keyword'];
    $sepakbola = query("SELECT * FROM sepakbola WHERE
                nama LIKE '%$keyword%' OR
                deskripsi LIKE '%$keyword%' OR
                harga LIKE '%$keyword%' OR
                kategori LIKE '%$keyword%' ");
} else {
    $sepakbola = query("SELECT * FROM sepakbola");
}

?>



<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>TUBES_203040079</title>
    <link rel="stylesheet" href="../css/style.css">
    <link type="text/css" rel="stylesheet" href="../css/materialize.min.css" media="screen,projection" />
</head>

<body class="luar">
    <h1 class="judul">RezaSport Store.</h1>
    <div class="add2">
        <a href="tambah.php">Tambah Data</a>
    </div>
    <br>
    <form class="cari" action="" method="get">
        <input type="text" name="keyword" size="40" placeholder="masukkan keyword pencarian.." autocomplete="off" autofocus class="keyword">
        <button type="submit" name="cari" class="tombol-cari">Cari!</button>
    </form>
    <br>
    <br>
    <table class="tabel" border="1" cellpadding="13" cellspacing="0">
        <tr class="top">
            <th>#</th>
            <th>opsi</th>
            <th>Gambar</th>
            <th>Nama</th>
            <th>Deskripsi</th>
            <th>Harga</th>
            <th>Kategori</th>
        </tr>
        <?php if (empty($sepakbola)) : ?>
            <tr>
                <td>
                    <h1>Data tidak ditemukan</h1>
                </td>
            </tr>
        <?php else : ?>
            <?php $i = 1; ?>
            <?php foreach ($sepakbola as $sb) : ?>
                <tr class="isi">
                    <td><?= $i ?></td>
                    <td>
                        <a href="ubah.php?id=<?= $sb['id'] ?>"><button class="ubah">Ubah</button></a>
                        <a href="hapus.php?id=<?= $sb['id'] ?>" onclick="return confirm('Hapus data??')"><button class="hapus">Hapus</button></a>
                    </td>
                    <td><img src="../assets/img/<?= $sb['gambar']; ?>" alt=""></td>
                    <td><?= $sb['nama']; ?></td>
                    <td><?= $sb['deskripsi']; ?></td>
                    <td><?= $sb['harga']; ?></td>
                    <td>
                        <div class="background-text"><?= $sb['kategori']; ?></div>
                    </td>
                </tr>
                <?php $i++; ?>
            <?php endforeach; ?>
        <?php endif; ?>
    </table>
    <div class="logout">
        <a href="logout.php">Logout</a>
    </div>
    <footer class="page-footer blue-grey darken-4 center white-text">
        <div class="container">
            <p class="flow-text">RezaMarchyana. Copyright 2021.</p>
        </div>
    </footer>

</body>

</html>