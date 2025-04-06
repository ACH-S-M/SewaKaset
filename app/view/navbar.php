<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="app/asset/css/main.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.2/css/all.min.css" integrity="sha512-Evv84Mr4kqVGRNSgIGL/F/aIDqQb7xQ2vcrdIwxfjThSH8CSR7PBEakCr51Ck+w+/U6swU2Im1vVX0SVk9ABhg==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <title>Document</title>
</head>
<body>
<nav class="flex bg-transparent fixed w-full h-auto p-6 justify-between items-center z-50 " id="nav">
            <ul class="w-3/4 flex gap-7 ">
                <li ><a class="text-white hover:text-yellow-500 cursor-pointer" href="http://sewakaset.test/">Dashboard</a></li>
                <li class="text-white hover:text-yellow-500 cursor-pointer">Produk</li>
                <li class="text-white hover:text-yellow-500 cursor-pointer" onclick="keranjang()" >Keranjang</li>
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

                <script>
                    function keranjang(){
                        window.location.href = "http://sewakaset.test/app/view/keranjang.php";
                    }
                </script>
                <script src="app/asset/js/navbar.js">  </script>
                <script src="/app/asset/js/ajax.js"></script>
</body>
</html>