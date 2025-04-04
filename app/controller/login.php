<?php 
include '../koneksi/koneksi.php';
include 'userauth.php';
if ($_SERVER['REQUEST_METHOD'] == 'POST'){
    $userData = [
        'email' => $_POST['email'],
        'password' => $_POST['password']
    ];
}
$auth = new user($koneksi);
$auth->userLogin($userData['email'],$userData['password']);
$auth->authentikasiSesi();
if (!isset($_SESSION['email'])){
    header('location=/index.php');
    exit;
}
?>