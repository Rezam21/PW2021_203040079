<!-- Reza Marchyana -->
<!-- 203040079 -->
<!-- IF - C -->
<?php
    $jawabanIsset = "Isset adalah = isset() digunakan untuk menyatakan variabel sudah diset atau tidak. Jika variabel sudah diset maka variabel akan mengembalikan nilai true dan false ketika variabel kosong atau tidak terdefinisi.<br><br>";
    $jawabanEmpty = "Empty adalah = untuk menentukan apakah suatu variabel itu kosong/tidak terdefinisi atau belum. Akan menghasilkan false jika variabel terdifinisi dan true ketika variabel kosong atau tidak terdefinisi.";
    $GLOBALS["isset"] = $jawabanIsset;
    $GLOBALS['empty'] = $jawabanEmpty;
    
    function soal($style)
    {
        echo "<div class = $style>
        <h1>" . $GLOBALS['isset'] . "</h1>
        <h1>" . $GLOBALS['empty'] . "</h1>
        </div>";
    }

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Latihan2b_203040079</title>
    <style>
        .kotak 
        {
            font-size: 7px;
            padding-left: 10px;
            border: 1px solid black;
            font-family: Arial, Helvetica, sans-serif;
        }
    </style>
</head>
<body>
    <?php echo soal("kotak"); ?>
</body>
</html>