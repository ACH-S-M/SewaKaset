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
</head>
<body  class="bg-blue-200">
        <div class="loginpage w-3/4 h-auto mx-auto my-24 pb-7 bg-white rounded-md  " >
           <div class="menu flex gap-7 pb-4 text-2xl cursor-pointer pl-2 pt-2">
            <h1 class="bg-blue-500 text-white pl-2 pr-2 ">Login</h1>
            <h1>Daftar </h1>
           </div>
           <h1>Login Page </h1>
                <form action="login" method="post" class="h-full flex flex-col justify-center items-center m-6 gap-4" >
                    <input type="text" placeholder="username" class="border-2 p-2 w-1/2">
                    <input type="password" placeholder="Password" class="border-2 p-2 w-1/2">
                    <button type="submit" class="bg-purple-400 text-white p-3 w-1/2 rounded-md">Login</button>
                </form>
        </div>
</body>
</html>