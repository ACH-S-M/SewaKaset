<?php 
include __DIR__ . '/app/controller/userauth.php';
include __DIR__ . '/app/koneksi/koneksi.php';
include __DIR__.'/app/model/produkModel.php';
include __DIR__.'/app/view/navbar.php';

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>VCD </title>
    <script src="https://cdn.jsdelivr.net/npm/@tailwindcss/browser@4"></script> 
    <link rel="stylesheet" href="app/asset/css/main.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.2/css/all.min.css" integrity="sha512-Evv84Mr4kqVGRNSgIGL/F/aIDqQb7xQ2vcrdIwxfjThSH8CSR7PBEakCr51Ck+w+/U6swU2Im1vVX0SVk9ABhg==" crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>
<body>
<main class="main">
    <!-- HERO SECTION -->
    <section class="hero min-h-screen w-full bg-red-200 flex items-center justify-center md:justify-end pt-4 px-4 md:pr-20" id="hero">
        <div class="relative w-full max-w-md md:w-80 h-40">
            <div class="absolute inset-0 bg-white/10 backdrop-blur-md rounded-md"></div>
            <div class="relative p-4">
                <h1 class="text-white text-xl md:text-3xl font-bold text-center md:text-left">
                    Nikmati Diskon 20% Setiap pembelian kaset game
                </h1>
            </div>
        </div>
    </section>

    <!-- PRODUK SECTION -->
    <section class="p-4 md:p-6 bg-blue-900">
        <h1 class="text-2xl md:text-3xl font-bold text-white text-center md:text-left">Produk Terpopuler</h1>
        <div class="w-full mt-5 flex flex-wrap gap-4 md:gap-6 justify-center md:justify-start">
            <?php foreach($listproduk as $barang) : ?>
                <a href="http://sewakaset.test/app/view/detail.php?bukuGet=<?= $barang['IDVCD'] ?>" class="no-underline text-black">
                    <div class="bg-white w-[90vw] sm:w-[280px] h-auto flex flex-col p-3 items-center shadow-inner rounded-lg hover:scale-105 hover:rounded-none transition-all duration-200">
                        <img src="data:image/jpeg;base64,<?= base64_encode($barang['foto_produk']) ?>" alt="foto" class="w-[200px] h-[200px] object-contain rounded-md">
                        <h1 class="mb-1 mt-1 text-lg md:text-xl font-bold text-center"><?= $barang['namakaset'] ?></h1>
                        <h1 class="font-bold text-center"><?='Rp'.$barang['harga'].',00' ?></h1>
                        <button class="px-4 py-2 bg-blue-900 text-white mt-4 rounded-sm text-sm md:text-base">Beli</button>
                    </div>
                </a>
            <?php endforeach ?>    
        </div>  
    </section>
</main>
      <script src="app/asset/js/ajax.js"></script>

</body>
</html>
