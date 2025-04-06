<?php 
include '../koneksi/koneksi.php';
include '../controller/userauth.php';
include 'navbarbg.php';
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
    <main>
       <?php if (isset($_SESSION['username'])): ?>
        <section class="bg-gray-200 w-full h-screen">
            <h1>Keranjang kosong </h1> 
        </section>
        <?php else: ?>
            <section class="bg-gray-200 w-full h-screen">
                <H1>Silahkan Login Terlebih dahulu </H1>
             </section>
       <?php endif ?>
    </main>
</body>
</html>