<?php

session_start();
require 'functions.php';

if (isset($_SESSION['username'])) {
    header("Location: admin.php");
    exit;
}

if (isset($_COOKIE['username']) && isset($_COOKIE['hash'])) {
    $username = $_COOKIE['username'];
    $hash = $_COOKIE['hash'];

    $result = mysqli_query(koneksi(), "SELECT * FROM user WHERE username = '$username'");
    $row = mysqli_fetch_assoc($result);

    if ($hash === hash('sha256', $row['id'], false)) {
        $_SESSION['username'] = $row['username'];
        header("Location: admin.php");
        exit;
    }
}

if (isset($_POST['submit'])) {
    $username = $_POST['username'];
    $password = $_POST['password'];
    $cek_user = mysqli_query(koneksi(), "SELECT * FROM user WHERE username = '$username'");

    if (mysqli_num_rows($cek_user) > 0) {
        $row = mysqli_fetch_assoc($cek_user);
        if (password_verify($password, $row['password'])) {
            $_SESSION['username'] = $_POST['username'];
            $_SESSION['hash'] = hash('sha256', $row['id'], false);

            if (isset($_POST['remember'])) {
                setcookie('username', $row['username'], time() + 60 * 60 * 24);
                $hash = hash('sha256', $row['id']);
                setcookie('hash', $hash, time() + 60 * 60 * 24);
            }

            if (hash('sha256', $row['id']) == $_SESSION['hash']) {
                header("Location: admin.php");
                die;
            }
            header("Location: ''/index.php");
            die;
        }
    }
    $error = true;
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
    <div class="containerlogin">
        <form action="" method="POST">
            <?php if (isset($error)) : ?>
                <p>Username atau Password salah</p>
            <?php endif; ?>
            <div class="judullog">
                <h2>Login</h2>
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
            <div class="remember">
                <input type="checkbox" name="remember">
                <label for="remember">Remember me</label>
            </div>
            <br>
            <button class="butlogin" type="submit" name="submit">LOGIN</button>
            <br>
            <div class="registrasi">
                <p>Belum punya akun? registrasi <a href="registrasi.php">Disini</a></p>
            </div>
        </form>
    </div>
</body>

</html>