<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Document</title>
  <link rel="stylesheet" href="app/asset/css/main.css" />
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.2/css/all.min.css"
        integrity="sha512-Evv84Mr4kqVGRNSgIGL/F/aIDqQb7xQ2vcrdIwxfjThSH8CSR7PBEakCr51Ck+w+/U6swU2Im1vVX0SVk9ABhg==" 
        crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>
<body class="bg-gray-900 text-white">

<!-- Navbar -->
<nav class="bg-transparent fixed w-full z-50 px-6 py-4" id="nav">
  <div class="flex justify-between items-center">
    <!-- Brand / Logo -->
    <div class="text-xl font-bold">GameIfyCenter</div>

    <!-- Burger Icon -->
    <div class="md:hidden">
      <button id="burger" class="text-white text-2xl focus:outline-none">
        <i class="fa-solid fa-bars"></i>
      </button>
    </div>

    <!-- Menu List (desktop) -->
    <ul class="hidden md:flex gap-6 items-center">
      <li><a href="http://sewakaset.test/" class="hover:text-yellow-500">Dashboard</a></li>
      <li><a href="#" class="hover:text-yellow-500">Produk</a></li>
      <li><a onclick="keranjang()" class="hover:text-yellow-500 cursor-pointer">Keranjang</a></li>
      <li><a href="#" class="hover:text-yellow-500">Riwayat Transaksi</a></li>
      <?php if (!isset($_SESSION['username'])): ?>
        <button class="bg-purple-400 text-white rounded-md px-4 py-2" onclick="window.location.href = 'http:/\/sewakaset.test/app/view/login.php'">Login</button>
      <?php else: ?>
        <div class="flex items-center gap-3">
          <i class="fa-solid fa-user text-white"></i>
          <p><?= $_SESSION['username'] ?></p>
        </div>
        <form action="app/view/logout.php" method="POST">
          <button type="submit" class="bg-purple-400 text-white px-4 py-2 rounded-md">Logout</button>
        </form>
      <?php endif ?>
    </ul>
  </div>

  <!-- Mobile Menu (toggle) -->
  <div id="mobile-menu" class="md:hidden mt-4 hidden flex-col gap-4 nav-bg">
    <a href="http://sewakaset.test/" class="block hover:text-yellow-500">Dashboard</a>
    <a href="#" class="block hover:text-yellow-500">Produk</a>
    <a onclick="keranjang()" class="block hover:text-yellow-500 cursor-pointer">Keranjang</a>
    <a href="#" class="block hover:text-yellow-500">Riwayat Transaksi</a>
    <?php if (!isset($_SESSION['username'])): ?>
      <button class="bg-purple-400 text-white rounded-md px-4 py-2 w-full text-left">Login</button>
    <?php else: ?>
      <div class="flex items-center gap-2 mt-2">
        <i class="fa-solid fa-user text-white"></i>
        <p><?= $_SESSION['username'] ?></p>
      </div>
      <form action="app/view/logout.php" method="POST">
        <button type="submit" class="bg-purple-400 text-white px-4 py-2 mt-2 rounded-md w-full text-left">Logout</button>
      </form>
    <?php endif ?>
  </div>
</nav>
<script>
    let navbar = document.getElementById('nav');
            window.addEventListener('scroll',function(){
    if (scrollY > 100){
        navbar.classList.add('nav-bg')
    }else (
        navbar.classList.remove('nav-bg')
    )
})
const burger = document.getElementById('burger');
const mobileMenu = document.getElementById('mobile-menu');

burger.addEventListener('click', () => {
  mobileMenu.classList.toggle('hidden');
});
let btnLogin = document.getElementById('btnLogin')
    btnLogin.addEventListener('click',function(){
     window.location.href = "http://sewakaset.test/app/view/login.php"})


function keranjang() {
  window.location.href = "http://sewakaset.test/app/view/keranjang.php";
}

</script>

</body>
</html>
