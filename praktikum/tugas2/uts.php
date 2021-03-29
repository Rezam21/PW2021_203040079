<?php
    function cetak_bintang($angka)
    {
        for ($c = 1; $c <= $angka; $c++)
        {
            for ($b = 1; $b <= $c; $b++) 
            {
              echo "*";
            }
            
          echo "<br>";
        } 
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>UTS NO 3</title>
</head>
<body>

  <div>
      <?php cetak_bintang(3) ?>
  </div>

</body>
</html>


