<!-- Reza Marchyana -->
<!-- 203040079 -->
<!-- IF - C -->
<?php
    function menghitungDeterminant($w, $x, $y, $z)
    {
        $hasil = (($w * $z) - ($x * $y));
        echo "<table style='border-left: 1px solid black; border-right:1px solid black;' cellspacing='5' cellpadding='5'>
            <tr>
                <td> $w </td>
                <td> $x </td>
            </tr>
            <tr>
                <td> $y </td>
                <td> $z </td>
            </tr>
        </table>";
        
        echo "<b>Determinan dari matriks tersebut adalah $hasil</b>";
    }
?>
    
    <!doctype html>

    <html lang="en">
    <head>
      <meta charset="utf-8">
      <title>Latihan2d_203040079</title>
      <style>
        .kotak 
        {
            border: 2px solid black;
            padding: 10px;
            width: 300px;
        }
      </style>
    </head>
    
    <body>
        <div class="kotak">
            <?php menghitungDeterminant(1,2,3,4) ?>
        </div>
    </body>
    </html>
