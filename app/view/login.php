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
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
  <title>Login Page</title>
  <script src="https://cdn.tailwindcss.com"></script>
  <style>
    .isSelected {
      @apply border-b-4 border-sky-500 text-sky-500;
    }
  </style>
</head>
<body class="bg-blue-100 flex items-center justify-center min-h-screen">

  <div class="w-full max-w-md bg-white rounded-xl shadow-xl p-6">
    <!-- Tab menu -->
    <div class="flex justify-around text-lg font-semibold mb-6">
      <h1 id="Login" onclick="switchForm('login')" class="cursor-pointer isSelected transition duration-200">Login</h1>
      <h1 id="Daftar" onclick="switchForm('register')" class="cursor-pointer transition duration-200">Daftar</h1>
    </div>

    <!-- Login Form -->
    <form action="login.php" method="post" id="loginForm" class="flex flex-col gap-4">
      <input type="text" name="email" placeholder="Email" class="border border-gray-300 p-2 rounded-md focus:outline-none focus:ring-2 focus:ring-blue-400" required>
      <input type="password" name="password" placeholder="Password" class="border border-gray-300 p-2 rounded-md focus:outline-none focus:ring-2 focus:ring-blue-400" required>
      <button type="submit" class="bg-purple-500 text-white p-2 rounded-md hover:bg-purple-600 transition duration-300">Login</button>
    </form>

    <!-- Register Form -->
    <form action="register.php" method="post" id="registerForm" class="flex flex-col gap-4 hidden">
      <input type="text" name="username" placeholder="Username" class="border border-gray-300 p-2 rounded-md focus:outline-none focus:ring-2 focus:ring-blue-400" required>
      <input type="text" name="email" placeholder="Email" class="border border-gray-300 p-2 rounded-md focus:outline-none focus:ring-2 focus:ring-blue-400" required>
      <input type="password" name="password" placeholder="Password" class="border border-gray-300 p-2 rounded-md focus:outline-none focus:ring-2 focus:ring-blue-400" required>
      <button type="submit" class="bg-purple-500 text-white p-2 rounded-md hover:bg-purple-600 transition duration-300">Daftar</button>
    </form>
    <?php if (isset($_GET['error']) && $_GET['error'] == 'gagal'): ?>
      <div class="mt-4 text-center text-red-500 text-sm font-medium">
        Email atau password salah!
      </div>
    <?php endif; ?>
  </div>

  <script>
     function switchForm(form) {
  const loginTab = document.getElementById('Login');
  const daftarTab = document.getElementById('Daftar');
  const loginForm = document.getElementById('loginForm');
  const registerForm = document.getElementById('registerForm');

  if (form === 'login') {
    loginTab.classList.add('isSelected');
    daftarTab.classList.remove('isSelected');
    loginForm.classList.remove('hidden');
    registerForm.classList.add('hidden');
  } else {
    daftarTab.classList.add('isSelected');
    loginTab.classList.remove('isSelected');
    registerForm.classList.remove('hidden');
    loginForm.classList.add('hidden');
  }
}
  </script>
</body>
</html>
