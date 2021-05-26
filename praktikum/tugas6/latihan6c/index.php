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
    <title>Latihan5_203040079</title>
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
    <div class="container3">
        <div class="add">
            <a href="php/login.php">Admin!!</a>
        </div>
        <form class="cari" action="" method="get">
            <input type="text" name="keyword" autofocus>
            <button type="submit" name="cari">Cari!</button>
        </form>
        <div class="container1">
            <?php foreach ($sepakbola as $sb) : ?>
                <p>
                    <a class="nama" href="php/detail.php?id=<?= $sb['id'] ?>">
                        <?= $sb["nama"] ?>
                    </a>
                </p>
            <?php endforeach; ?>
        </div>
    </div>
</body>
</html>