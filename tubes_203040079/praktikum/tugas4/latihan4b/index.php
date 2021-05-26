<!-- Nama  : Reza Marchyana -->
<!-- NPM   : 203040079 -->
<!-- Shift : Kamis 08:00 - 09:00-->
<?php 

require 'php/functions.php';

$sepakbola = query("SELECT * FROM sepakbola")

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Latihan4b_203040079</title>
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
    <div class="tabel">
            <table border="1" cellspacing="0" cellpadding="10">
            <tr>
                <td><b>NO</b></td>
                <td><b>Gambar</b></td>
                <td><b>Nama</b></td>
                <td><b>Deskripsi</b></td>
                <td><b>Harga</b></td>
                <td><b>Kategori</b></td>
            </tr>
                <?php  $nomor = 1; ?>    
                <?php foreach ($sepakbola as $sb) : ?>  
                    <tr>
                        <td><?= $nomor; ?></td>
                        <td>
                            <img src="assets/img/<?= $sb["gambar"]; ?>">
                        </td>
                        <td><?= $sb["nama"];?></td>
                        <td><?= $sb["deskripsi"];?></td>
                        <td><?= $sb["harga"];?></td>
                        <td><div class="background-text"><?= $sb["kategori"];?></div></td>
                    </tr>  
                <?php $nomor++; ?>
                <?php endforeach; ?>
        </table>
    </div>
</body>
</html>