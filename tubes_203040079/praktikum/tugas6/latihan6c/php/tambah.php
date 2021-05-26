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
    <title>Document</title>
    <link rel="stylesheet" href="../css/style.css">
</head>
<body>
    <div class="container2">
        <h3>Form Tambah data Mahasiswa</h3>
        <form action="" method="POST">
            <ul>
                <li>
                    <label for="gambar">Gambar : </label><br>
                    <input type="text" name="gambar" id="gambar" required><br><br>
                </li>
                <li>
                    <label for="nama">Nama : </label><br>
                    <input type="text" name="nama" id="nama" required><br><br>
                </li>
                <li>
                    <label for="deskripsi">Deskripsi : </label><br>
                    <input type="text" name="deskripsi" id="deskripsi" required></input><br><br>
                </li>
                <li>
                    <label for="harga">Harga : </label><br>
                    <input type="text" name="harga" id="harga"><br><br>
                </li>
                <li>
                    <label for="kategori">Kategori : </label><br>
                    <input type="text" name="kategori" id="kategori"><br><br>
                </li>
            <br>
            <button class="up" type="submit" name="tambah">Tambah data!</button>
            <button class="tombol" type="submit">
                <a href="admin.php" class="tombol-kembali">Kembali</a>
            </button>
            </ul>
        </form>
    </div>
</body>
</html>
