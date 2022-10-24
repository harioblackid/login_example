<?php 
session_start();

// // Periksa session terlebih dahulu
if(isset($_SESSION['username'])) {
    $id_user = $_SESSION['username'];
}
else {
    $id_user = 0;
}


// Jika session belum dibuat maka halaman diarahkan kembali ke login.php
if($id_user === 0) {
    header('Location: login.php');    
}
else {
    null;
}
