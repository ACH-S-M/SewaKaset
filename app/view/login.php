<?php 
include '../koneksi/koneksi.php';
include '../controller/userauth.php';
if ($_SERVER['REQUEST_METHOD'] == 'POST'){
    $userData = [
        'email' => $_POST['email'],
        'password' => $_POST['password']
    ];
$auth = new user($koneksi);
$auth->userLogin($userData['email'],$userData['password']);

}

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Page</title>
    <script src="https://cdn.jsdelivr.net/npm/@tailwindcss/browser@4"></script>
    <style>
        .isSelected{
            background-color: skyblue;
            width: auto;
            height: 5px;
        }
        .hidden {
            display: none;
        }
    
        
    </style>
</head>
<body  class="bg-blue-200">
<div class=" w-3/4 h-auto mx-auto my-24 pb-7 bg-white rounded-md  " >
        <div class="menu flex gap-7 pb-4 text-2xl cursor-pointer pl-2 pt-2">
         <h1 id="Login" onclick="ubahHalaman('../asset/html/loginpage.html')" class="isSelected">Login</h1>
         <h1 id="Daftar" onclick="ubahHalaman('../asset/html/signuppage.html')">Daftar </h1>
        </div>
             <form action="login.php" method="post" class="login h-full flex flex-col justify-center items-center m-6 gap-4" >
                 <input type="text" name="email" placeholder="email" class="border-2 p-2 w-1/2">
                 <input type="password" name="password" placeholder="Password" class="border-2 p-2 w-1/2">
                 <button type="submit" class="bg-purple-400 text-white p-3 w-1/2 rounded-md">Login</button>
             </form>
             <form action="register.php" method="post" class="daftar h-full flex flex-col justify-center items-center m-6 gap-4 hidden" >
                     <input type="text" name="username" placeholder="username" class="border-2 p-2 w-1/2">
                     <input type="text" name="email" placeholder="email" class="border-2 p-2 w-1/2">
                     <input type="password" name="password" placeholder="Password" class="border-2 p-2 w-1/2">
                     <button type="submit" class="bg-purple-400 text-white p-3 w-1/2 rounded-md">Daftar</button>
                 </form>

     </div> 
     <?php if (isset($_GET['error']) && $_GET['error'] == 'gagal'): ?>
    <div id="loginsalah" class="text-red-500">Email atau password salah!</div>
        <?php endif; ?>
     <div class="w-52 my-0 bg-white h-auto p-3 mx-auto hidden" id="loginsalah">
            <h1 class="text-xl text-red-500 ">Login gagal, password atau email salah</h1>
     </div>
    <script src="/app/asset/js/main.js">  </script>
</body>
</html>