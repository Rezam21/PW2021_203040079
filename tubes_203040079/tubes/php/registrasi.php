<?php

require 'functions.php';

if (isset($_POST["register"])) {
    if (registrasi($_POST) > 0) {
        echo "<script>
                alert('Registrasi Berhasil');
                documents.location.href = 'login.php';
            </script>";
    } else {
        echo "<script>
                alert('Registrasi Gagal');
            </script>";
    }
}

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>TUBES_203040079</title>
    <link rel="stylesheet" href="../css/style.css">
</head>

<body class="login">
    <div class="containerregistrasi">
        <form action="" method="post">
            <div class="judullog">
                <h2>Registrasi</h2>
            </div>
            <table>
                <tr>
                    <td><label class="userall" for="username">Username</label></td>
                    <td><input class="user" type="text" name="username" autofocus autocomplete="off" required></td>
                </tr>
                <tr>
                    <td><br></td>
                </tr>
                <tr>
                    <td><label class="passall" for="password">Password</label></td>
                    <td><input class="pass" type="password" name="password"></td>
                </tr>
            </table>
            <br>
            <button class="butregister" type="submit" name="register">REGISTER</button>
        </form>
    </div>
</body>

</html>