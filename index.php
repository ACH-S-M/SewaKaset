<?php 
include __DIR__ . '/app/controller/userauth.php';
include __DIR__ . '/app/koneksi/koneksi.php';


?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>VCD </title>
    <script src="https://cdn.jsdelivr.net/npm/@tailwindcss/browser@4"></script>
</head>
<body>
      <nav class="flex w-full h-auto bg-red-400 p-6 justify-between items-center fixed" >
            <ul class="w-3/4 flex gap-7 ">
                <li class="text-white hover:text-yellow-500 cursor-pointer">Dashboard</li>
                <li class="text-white hover:text-yellow-500 cursor-pointer">Produk</li>
                <li class="text-white hover:text-yellow-500 cursor-pointer">Keranjang</li>
                <li class="text-white hover:text-yellow-500 cursor-pointer">Riwayat transaksi</li>
                </ul>
                        <?php if (!isset($_SESSION['username'])):?>
                            <button class="bg-purple-400 text-white rounded-md px-6 py-2 " id="btnLogin" >Login</button>
                        <?php else:  ?>   
                            <div class="person">
                                <p class="text-white"><?php   
                                    echo $_SESSION['username'] ;
                                ?></p>
                            </div>
                            <form action="app/view/logout.php">
                                <button type="submit" class="bg-purple-400 text-white px-6 py-2">Logout</button>
                            </form>
                        <?php endif?>
                </nav>
              
                
      <script>let btnLogin = document.getElementById('btnLogin')
                btnLogin.addEventListener('click',function(){
                 window.location.href = "http://sewakaset.test/app/view/login.php"})
                 </script>
</body>
</html>
