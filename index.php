<?php include "keamanan.php"; ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>
</head>
<body>
    <h1>Selamat Datang</h1>
    <span><?php echo $id_user; ?></span>

    <hr>
    <a href="logout.php">Logout</a>
</body>
</html>