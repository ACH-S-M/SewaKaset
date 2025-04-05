<?php 
session_start();
include 'navbar.php';
include '../controller/userauth.php';
include '../koneksi/koneksi.php';
include '../model/produkModel.php';
echo "Ini detail"
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Detail </title>
     <style>
        #nav {
            background-color: rgba(249, 0, 0, 0.7) !important;
            position: relative !important;
        }
     </style>
    <script src="https://cdn.jsdelivr.net/npm/@tailwindcss/browser@4"></script> 
</head>
<body>
    <?php  echo $_SESSION['username'] ?>
</body>
</html>