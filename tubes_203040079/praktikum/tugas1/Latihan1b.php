<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Latihan1b_203040079</title>
</head>
<body>
    <table border="1" cellspacing="0" cellpadding="10">
        <tr>
            <th></th>
            <?php for ($i = 1; $i <= 5; $i++) : ?>
                <th>Kolom <?= $i; ?></th>
            <?php endfor; ?>
        
            <?php for ($i = 1; $i <= 5; $i++) : ?>
            <tr>
                <th>Baris <?= $i; ?></th>
                <?php for ($g = 1;$g <= 5; $g++) : ?>
                    <td>Baris <?= $i ?>,Kolom <?= $g; ?></td>
                <?php endfor; ?>
            </tr>
            <?php endfor; ?>
        </tr>
    </table>
</body>
</html>