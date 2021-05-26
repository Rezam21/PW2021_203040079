<!-- Nama  : Reza Marchyana -->
<!-- NPM   : 203040079 -->
<!-- Shift : Kamis 08:00 - 09:00-->
<?php 

$conn = mysqli_connect("localhost", "root", "");

mysqli_select_db($conn, "pw_tubes_203040079");

$result = mysqli_query($conn, "SELECT * FROM sepakbola");

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Latihan4a_203040079</title>
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
                <?php while($row = mysqli_fetch_assoc($result)) : ?>  
                    <tr>
                        <td><?= $nomor; ?></td>
                        <td>
                            <img src="assets/img/<?= $row["gambar"]; ?>">
                        </td>
                        <td><?= $row["nama"];?></td>
                        <td><?= $row["deskripsi"];?></td>
                        <td><?= $row["harga"];?></td>
                        <td><div class="background-text"><?= $row["kategori"];?></div></td>
                    </tr>  
                <?php $nomor++; ?>
                <?php endwhile; ?>
        </table>
    </div>
</body>
</html>