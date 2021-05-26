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
    <title>Latihan4c_203040079</title>
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
    <div class="container1">
        <?php foreach ($sepakbola as $sb) : ?>
            <p>
                <a class="nama" href="php/detail.php?id=<?= $sb['id'] ?>">
                    <?= $sb["nama"] ?>
                </a>
            </p>
        <?php endforeach; ?>
    </div>
</body>
</html>