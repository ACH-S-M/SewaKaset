<?php 
include '../koneksi/koneksi.php';
include '../controller/userauth.php';
include 'navbar.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <script src="https://cdn.jsdelivr.net/npm/@tailwindcss/browser@4"></script> 
</head>
<body>
    <?php if ($_SESSION['username']): ?>
        <h1>ada sesi </h1>
    <?php else : ?>
        <h1>Login akun dulu baru bisa akses keranjang </h1>
    <?php endif ?>
</body>
</html>