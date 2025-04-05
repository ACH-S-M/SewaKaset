<?php 
include __DIR__ . '/app/controller/userauth.php';
include __DIR__ . '/app/koneksi/koneksi.php';
include __DIR__.'/app/model/produkModel.php';


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
      <nav class="flex bg-transparent w-full h-auto p-6 justify-between items-center fixed z-50 " id="nav">
            <ul class="w-3/4 flex gap-7 ">
                <li class="text-white hover:text-yellow-500 cursor-pointer">Dashboard</li>
                <li class="text-white hover:text-yellow-500 cursor-pointer">Produk</li>
                <li class="text-white hover:text-yellow-500 cursor-pointer">Keranjang</li>
                <li class="text-white hover:text-yellow-500 cursor-pointer">Riwayat transaksi</li>
                </ul>
                        <?php if (!isset($_SESSION['username'])):?>
                            <button class="bg-purple-400 text-white rounded-md px-6 py-2 " id="btnLogin" >Login</button>
                        <?php else:  ?>   
                            <div class="person py-2 px-6 flex gap-4 items-center cursor-pointer" id="profile">
                                 <i class="fa-solid fa-user text-white text-xl"></i>
                                <p class="text-white"><?php   
                                    echo $_SESSION['username'] ;
                                ?></p>
                            </div>
                            <form action="app/view/logout.php">
                                <button type="submit" class="bg-purple-400 text-white px-6 py-2">Logout</button>
                            </form>
                        <?php endif?>
                </nav>
              <main class="h-auto main">
                    <section class="h-screen w-full bg-red-200 hero flex items-center justify-end pt-4  pr-20 " id="hero">
                        <div class="relative w-80 h-40 ">
                            <div class="absolute inset-0 bg-white/10 backdrop-blur-md rounded-md"></div>
                            <div class="relative p-4">
                                <h1 class="text-white text-3xl font-bold">
                                Nikmati Diskon 20% Setiap pembelian kaset game
                                </h1>
                            </div>
                        </div>
                    </section>
                    <section class="p-6 bg-blue-900 h-auto">
                        <h1 class="text-3xl font-bold text-white">Produk Terpopuler</h1>
                        <div class="container-card  w-full h-auto mt-5 flex flex-wrap p-2 gap-6 justify-center md:justify-start">
                                <?php foreach($listproduk as $barang) : ?>
                                   <div class="card bg-white w-[280px] h-[360px] flex flex-col p-3 items-center shadow-inner rounded-lg hover:scale-110 hover:rounded-none transition-all " onclick="getDetail('app/view/detail.php')">
                                          <img src="data:image/jpeg;base64,<?= base64_encode($barang['foto_produk']) ?>" alt="foto"  class="w-[200px] h-[200px] object-contain rounded-md">
                                            <h1 class="mb-1 mt-1 text-xl font-bold"><?=$barang['namakaset'] ?></h1>
                                            <h1 class="font-bold"><?='Rp'.$barang['harga'].',00' ?></h1>
                                            <button class="px-6 py-3 bg-blue-900 text-white mt-4 rounded-sm">Beli </button>
                                   </div>
                             <?php endforeach ?>    
                         </div>  
                    </section>
                    <section>
                        <marquee>Ini teks gerak</marquee>
                    </section>
              </main>
      <script src="app/asset/js/navbar.js">  </script>
      <script src="app/asset/js/ajax.js"></script>

</body>
</html>
