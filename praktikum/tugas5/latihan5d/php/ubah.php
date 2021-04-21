<?php 
require 'functions.php';

$id = $_GET['id'];
$sb = query("SELECT * FROM sepakbola WHERE id = $id")[0];

if (isset($_POST['ubah'])) {
    if (ubah($_POST) > 0) {
        echo "<script>
                    alert('Data Berhasil diubahkan!');
                    documents.location.href = 'admin.php';
                </script>";
    } else { 
        echo "<script>
                    alert('Data Gagal diubahkan!');
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
        <h3>Form ubah data Mahasiswa</h3>
        <form action="" method="POST">
            <ul>
                <input type="hidden" name="id" id="id" value="<?= $sb['id']; ?>">
                <li>
                    <label for="gambar">Gambar : </label><br>
                    <input type="text" name="gambar" id="gambar" required value="<?= $sb['gambar']; ?>"><br><br>
                </li>
                <li>
                    <label for="nama">Nama : </label><br>
                    <input type="text" name="nama" id="nama" required value="<?= $sb['nama']; ?>"><br><br>
                </li>
                <li>
                    <label for="deskripsi">Deskripsi : </label><br>
                    <input type="text"name="deskripsi" id="deskripsi" required value="<?= $sb['deskripsi']; ?>"></input><br><br>
                </li>
                <li>
                    <label for="harga">Harga : </label><br>
                    <input type="text" name="harga" id="harga" required value="<?= $sb['harga']; ?>"><br><br>
                </li>
                <li>
                    <label for="kategori">Kategori : </label><br>
                    <input type="text" name="kategori" id="kategori" required value="<?= $sb['kategori']; ?>"><br><br>
                </li>
            <br>
            <button class="up" type="submit" name="ubah">ubah data!</button>
            <button class="tombol" type="submit">
                <a href="admin.php" class="tombol-kembali">Kembali</a>
            </button>
            </ul>
        </form>
    </div>
</body>
</html>
