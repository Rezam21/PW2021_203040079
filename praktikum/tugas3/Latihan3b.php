<!-- Nama  : Reza Marchyana -->
<!-- NPM   : 203040079 -->
<!-- Shift : Kamis 08:00 - 09:00-->

<?php 
$pemain_bola = [
    "Mohammad Salah",
    "Cristiano Ronaldo",
    "Lionel Messi",
    "Zlatan Ibrahimovic",
    "Neymar Jr"
];
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <title>Latihan3b_203040079</title>
    <style>
    .tabel {
        border: 2px solid black;
        padding: 10px;
        text-align: left;
        font-family: arial;
        width: 500px;
    }
    .tabel li {
        padding: 3px;
    }
    </style>
</head>
<body>
    <div class="tabel">
        <h3>Daftar Pemain Bola Terkenal</h3>
        <ol>
            <?php foreach($pemain_bola as $p) : ?>
                <li><?php echo $p; ?></li>
            <?php endforeach; ?>

        </ol>

        <?php 
        array_push($pemain_bola, "Luca Modric", "Sadio Mane");
        sort($pemain_bola);
        ?>
        <h3>Daftar Pemain Bola Terkenal Baru</h3>
        <ol>
            <?php foreach($pemain_bola as $p) : ?>
                <li><?php echo $p; ?></li>
            <?php endforeach; ?>
        </ol>
    </div>
</body>
</html>
