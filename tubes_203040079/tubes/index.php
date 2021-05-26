<!-- Nama  : Reza Marchyana -->
<!-- NPM   : 203040079 -->
<!-- Shift : Kamis 08:00 - 09:00-->
<?php

require 'php/functions.php';

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
    <link type="text/css" rel="stylesheet" href="css/materialize.min.css" media="screen,projection" />
    <link rel="stylesheet" href="css/style.css">
</head>

<body>
    <!-- Navbar -->
    <div class="nav1">
        <div class="navbar-fixed">
            <nav class="blue-grey darken-4">
                <div>
                    <div class="nav-wrapper tulisnav">
                        <a href="#home" class="brand-logo ">RezaSport Store.</a>
                    </div>
                </div>
            </nav>
        </div>
    </div>
    <div class="parallax-container">
        <div class="parallax"><img src="assets/img/para.jpg"></div>
        <div class="para">
            <h1 class="center light black-text text-darken-3">"Hard work will always overcome natural talent when natural talent does not work hard enough."</h1>
            <h1 class="center">-Sir Alex Ferguson.</h1>
        </div>
    </div>
    <div class="umat">
        <h1>Produk</h1>
        <div class="containerindex">
            <div class="add">
                <a href="php/login.php">Admin!!</a>
            </div>
            <form class="cari" action="" method="get">
                <input type="text" name="keyword" size="40" placeholder="masukkan keyword pencarian.." autocomplete="off" autofocus class="keyword">
                <button type="submit" name="cari" class="tombol-cari">Cari!</button>
            </form>
            <div class="container2index">
                <?php foreach ($sepakbola as $sb) : ?>
                    <div class="">
                        <a class="nama" href="php/detail.php?id=<?= $sb['id'] ?>">
                            <div class="isiindex">
                                <img src="assets/img/<?= $sb["gambar"]; ?>">
                                <br>
                                <?= $sb["nama"] ?>
                            </div>
                            <br>
                            <br>
                            <br>
                        </a>
                    </div>
                <?php endforeach; ?>
            </div>
        </div>
    </div>

    <footer class="page-footer blue-grey darken-4 center white-text">
        <div class="container">
            <p class="flow-text">RezaMarchyana. Copyright 2021.</p>
        </div>
    </footer>

    <script type="text/javascript" src="js/materialize.min.js"></script>
    <script>
        const parallax = document.querySelectorAll('.parallax');
        M.Parallax.init(parallax);
    </script>
</body>

</html>