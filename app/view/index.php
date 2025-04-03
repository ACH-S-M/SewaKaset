<?php 
include '../controller/userauth.php';
include '../koneksi/koneksi.php';
  

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Page</title>
    <script src="https://cdn.jsdelivr.net/npm/@tailwindcss/browser@4"></script>
    <style>
        .hidden {
            display: none;
        }
        
    </style>
</head>
<body  class="bg-blue-200">
<div class=" w-3/4 h-auto mx-auto my-24 pb-7 bg-white rounded-md  " >
        <div class="menu flex gap-7 pb-4 text-2xl cursor-pointer pl-2 pt-2">
         <h1 id="Login" onclick="ubahHalaman('../asset/html/loginpage.html')">Login</h1>
         <h1 id="Daftar" onclick="ubahHalaman('../asset/html/signuppage.html')">Daftar </h1>
        </div>
             <form action="login" method="post" class="login h-full flex flex-col justify-center items-center m-6 gap-4" >
                 <input type="text" placeholder="username" class="border-2 p-2 w-1/2">
                 <input type="password" placeholder="Password" class="border-2 p-2 w-1/2">
                 <button type="submit" class="bg-purple-400 text-white p-3 w-1/2 rounded-md">Login</button>
             </form>
             <form action="login" method="post" class="daftar h-full flex flex-col justify-center items-center m-6 gap-4 hidden" >
                     <input type="text" placeholder="Nama" class="border-2 p-2 w-1/2">
                     <input type="text" placeholder="username" class="border-2 p-2 w-1/2">
                     <input type="password" placeholder="Password" class="border-2 p-2 w-1/2">
                     <button type="submit" class="bg-purple-400 text-white p-3 w-1/2 rounded-md">Login</button>
                 </form>

     </div>
    <script>
        document.querySelector('h1[onclick*="loginpage.html"]').addEventListener('click',function(){
            document.querySelector('.login').classList.remove('.hidden')
            document.querySelector('.daftar').classList.add('.hidden')
        });
        document.querySelector('h1[onclick*="signuppage.html"]').addEventListener('click',function(){
            document.querySelector('.login').classList.add('.hidden')
            document.querySelector('.daftar').classList.remove('.hidden')
        })
    </script>
</body>
</html>