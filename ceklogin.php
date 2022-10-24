<?php

// Buka koneksi
include "koneksi.php";

// Ambil data hasil input dari form
$username = $_POST['username'];
$password = $_POST['password'];

$sql = "SELECT * FROM user WHERE username = '{$username}'";
$query = mysqli_query($koneksi, $sql) or die (mysqli_error($koneksi));

// Jika data ditemukan maka baris akan lebih dari 0
// Periksa baris dari query diatas apakah lebih dari 0 atau tidak
if(mysqli_num_rows($query) > 0) {
    // Ambil data dari database
    $data = mysqli_fetch_array($query);

    // Periksa password
    if($data['password'] == $password) {
        // Jika password sama maka buat session ke index.php
        session_start();

        $_SESSION['username'] = $data['username'];
        $_SESSION['name'] = $data['fullname'];
        header('Location: index.php');
    }
    else {
        // Jika password tidak sama maka kirim notifikasi ke halaman login.php
        header("Location: login.php?notif=password");
    }

} else {
    // Jika username tidak ditemukan maka kirim notifikasi ke Halaman login.php
    header("Location: login.php?notif=username");
}