<?php

session_start();

if (!isset($_SESSION["username"])) {
    header("Location: login.php");
    exit;
}

require 'functions.php';

if (isset($_POST['tambah'])) {
    if (tambah($_POST) > 0) {
        echo "<script>
                    alert('Data Berhasil ditambahkan!');
                    documents.location.href = 'admin.php';
                </script>";
    } else {
        echo "<script>
                    alert('Data Gagal ditambahkan!');
                    documents.location.href = 'admin.php';
                </script>";
    }
}



?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>TUBES_203040079</title>
    <link rel="stylesheet" href="../css/style.css">
</head>

<body class="tambahall">
    <div class="containertambah">
        <h3>Form Tambah data Mahasiswa</h3>
        <form action="" method="POST">
            <ul>
                <li class="katatambah">
                    <label for="gambar">Gambar : </label><br>
                    <input type="text" name="gambar" id="gambar" required autocomplete="off"><br><br>
                </li>
                <li class="katatambah">
                    <label for="nama">Nama : </label><br>
                    <input type="text" name="nama" id="nama" required autocomplete="off"><br><br>
                </li>
                <li class="katatambah">
                    <label for="deskripsi">Deskripsi : </label><br>
                    <input type="text" name="deskripsi" id="deskripsi" required autocomplete="off"></input><br><br>
                </li>
                <li class="katatambah">
                    <label for="harga">Harga : </label><br>
                    <input type="text" name="harga" id="harga" required autocomplete="off"><br><br>
                </li>
                <li class="katatambah">
                    <label for="kategori">Kategori : </label><br>
                    <input type="text" name="kategori" id="kategori" required autocomplete="off"><br><br>
                </li>
                <br>
                <button class="up" type="submit" name="tambah">Tambah data!</button>
                <button class="tombol2" type="submit">
                    <a href="admin.php" class="tombol-kembali">Kembali</a>
                </button>
            </ul>
        </form>
    </div>
</body>

</html>