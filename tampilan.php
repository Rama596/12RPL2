<?php
session_start();
if(!isset($_SESSION['user'])){
    header('location:formlogin.php');
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title></title>
</head>
<body style="text-align:center">
    <h1>Halaman Awal</h1>
    <a href="index.html">Home</a>
    <a href="logout.php">logout</a>
    <br>
    <h3>Selamat datang, nama user</h3>
    HALAMAN INI AKAN DITAMPILKAN SETELAH USER LOGIN.

</body>
</html>