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
<div class=" w-3/4 h-auto mx-auto my-24 pb-7 bg-white rounded-md  " >
        <div class="menu flex gap-7 pb-4 text-2xl cursor-pointer pl-2 pt-2">
         <h1 onclick="ubahHalaman('../asset/html/loginpage.html')">Login</h1>
         <h1 onclick="ubahHalaman('../asset/html/signuppage.html')">Daftar </h1>
        </div>
             <form action="login" method="post" class="loginpage h-full flex flex-col justify-center items-center m-6 gap-4" >
                 <input type="text" placeholder="username" class="border-2 p-2 w-1/2">
                 <input type="password" placeholder="Password" class="border-2 p-2 w-1/2">
                 <button type="submit" class="bg-purple-400 text-white p-3 w-1/2 rounded-md">Login</button>
             </form>
     </div>
    <script>
            function ubahHalaman(el){
                if (el === '../asset/html/loginpage.html'){
                    alert ('login ditekan ')
                }else if(el === '../asset/html/signuppage.html') {
                    alert ('daftar ditekan ')
                }
                fetch(el)
                .then(response => {
                        if (!response.ok) {
                            throw new Error("HTTP error! Status: " + response.status);
                        }
                        return response.text();
                    })
                    .then(html => {
                            console.log("HTML Loaded:", html);
                            document.querySelector('.loginpage').innerHTML = html;
                        })
                        .catch(error => {
                            console.error("Gagal memuat halaman:", error);
                        });
            }
    </script>
</body>
</html>