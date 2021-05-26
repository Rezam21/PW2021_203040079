<!-- Reza Marchyana -->
<!-- 203040079 -->
<!-- IF - C -->
<?php
    function tumpukanBola($tumpukan)
    {
        for ($c = 1; $c <= $tumpukan; $c++)
        {
            for ($b = 1; $b <= $c; $b++) 
            {
              echo "<div class='bola'>$c</div>";
            }
            
          echo "<br>";
        } 
    }
?>
    
    <!doctype html>

    <html lang="en">
    <head>
      <meta charset="utf-8">
      <title>Latihan2c_203040079</title>
      <style>
        .bola
        {
            width: 50px;
            height: 50px;
            display: inline-block;
            text-align: center;
            margin: 0px 3px 3px 0px;
            border:3px solid black;
            border-radius: 100%; 
            line-height: 50px;
            background: salmon;
        }
        .kotak 
        {
          border: 2px solid black;
          padding: 10px;
          width: 350px;
        }
      </style>
    </head>
    
    <body>
        <div class="kotak">
          <?php tumpukanBola(5) ?>
        </div>
    </body>
    </html>
