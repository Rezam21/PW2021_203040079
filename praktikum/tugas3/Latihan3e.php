<!-- Nama  : Reza Marchyana -->
<!-- NPM   : 203040079 -->
<!-- Shift : Kamis 08:00 - 09:00-->

<?php 
    $barang = [
    [
        "gambar" => "mu.jpg",
        "nama" => "Jersey Manchester united",
        "deskripsi" => "Jersey Manchester united home musim 2020/2021",
        "harga" => "Rp. 400.000",
        "kategori" => "Jersey Sepakbola"
    ],
    [
        "gambar" => "liverpool.jpg",
        "nama" => "Jersey Liverpool",
        "deskripsi" => "Jersey Liverpool home musim 2020/2021",
        "harga" => "Rp. 370.000",
        "kategori" => "Jersey Sepakbola"
    ],
    [
        "gambar" => "juve.jpg",
        "nama" => "Jersey Juventus",
        "deskripsi" => "Jersey Juventus home musim 2020/2021",
        "harga" => "Rp. 350.000",
        "kategori" => "Jersey Sepakbola"
    ],
    [
        "gambar" => "inter.jpg",
        "nama" => "Jersey Inter Milan",
        "deskripsi" => "Jersey Inter Milan home musim 2020/2021",
        "harga" => "Rp. 350.000",
        "kategori" => "Jersey Sepakbola"
    ],
    [
        "gambar" => "Barcelona.jpeg",
        "nama" => "Jersey Barcelona",
        "deskripsi" => "Jersey Barcelona home musim 2020/2021",
        "harga" => "Rp. 400.000",
        "kategori" => "Jersey Sepakbola"
    ],
    [
        "gambar" => "jaket-mu.jpg",
        "nama" => "Jacket Manchester United",
        "deskripsi" => "Jacket Manchester United musim 2020/2021",
        "harga" => "Rp. 350.000",
        "kategori" => "Jacket Sepakbola"
    ],
    [
        "gambar" => "jaket-juve.jpg",
        "nama" => "Jacket Juventus",
        "deskripsi" => "Jacket Juventus musim 2020/2021",
        "harga" => "Rp. 350.000",
        "kategori" => "Jacket Sepakbola"
    ],
    [
        "gambar" => "acmilan.jpg",
        "nama" => "Jersey Ac Milan",
        "deskripsi" => "Jersey Ac Milan away musim 2020/2021",
        "harga" => "Rp. 370.000",
        "kategori" => "Jersey Sepakbola"
    ],
    [
        "gambar" => "jaket-bayern.jpg",
        "nama" => "Jacket Bayern Munchen",
        "deskripsi" => "Jacket Bayern Munchen musim 2020/2021",
        "harga" => "Rp. 400.000",
        "kategori" => "Jacket Sepakbola"
    ],
    [
        "gambar" => "chelsea.jpg",
        "nama" => "Jersey Chelsea",
        "deskripsi" => "Jersey Chelsea home musim 2020/2021",
        "harga" => "Rp. 370.000",
        "kategori" => "Jersey Sepakbola"
    ]
];
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Latihan3e_203040079</title>
    <style>
        .tabel {
            width: 100%;
            padding: 10px;
            font-family: arial;
            text-align: center;
        }
        body {
            margin: 0;
        }
        .background-text {
            color: antiquewhite;
            background: #DC143C;
            border: 1px solid black;
            font-size:14px;
            padding: 15px 32px;
            text-align: center;
            display: inline-block;
            margin: 4px 2px;
            border-radius: 50px;
        }
    </style>
</head>
<body>
    <div class="tabel">
            <table border="1" cellspacing="0" cellpadding="10">
                <td><b>NO</b></td>
                <td><b>Gambar</b></td>
                <td><b>Nama</b></td>
                <td><b>Deskripsi</b></td>
                <td><b>Harga</b></td>
                <td><b>Kategori</b></td>
                <tr></tr>
                <?php  $nomor = 1; ?>    
                <?php foreach ($barang as $p) : ?>  
                        
                        <td><?= $nomor; ?></td>
                        <td>
                            <img src="img/<?= $p["gambar"]; ?>">
                        </td>
                        <td><?= $p["nama"];?></td>
                        <td><?= $p["deskripsi"];?></td>
                        <td><?= $p["harga"];?></td>
                        <td><div class="background-text"><?= $p["kategori"];?></div></td>
                        <tr></tr>  
                        <?php $nomor++; ?>
                <?php endforeach; ?>
        </table>
    </div>
</body>
</html>