<?php

//Buka koneksi database
include "koneksi.php";

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login System</title>
</head>
<body>
    <form action="ceklogin.php" method="post">
        <h1>Login System</h1>
        <hr>
        
        <!-- Baris untuk nofitikasi -->
        <?php if(isset($_GET['notif'])) : ?>
        
            <?php 
            if($_GET['notif'] == "username") {
                echo "<h4>Username tidak benar, silahkan coba kembali</h4>";
            }
            else if($_GET['notif'] == "password") {
                echo "<h4>Password tidak benar, silahkan coba kembali</h4>";
            }
        ?>

        <?php endif; ?>
        <!-- Akhir baris notifikasi -->
        
        <label for="labelUser">Username : </label>
        <input type="text" name="username" id="labelUser">
        <br>

        <label for="labelPassword">Password : </label>
        <input type="password" name="password" id="labelPassword">
        <br>

        <button type="submit">Login</button>

    </form>
</body>
</html>