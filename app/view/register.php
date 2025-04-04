<?php 
include '../koneksi/koneksi.php';
include '../model/userModel.php';
if ($_SERVER['REQUEST_METHOD'] == 'POST'){
    $userRegist = [
        'username' => $_POST['username'],
        'email' => $_POST['email'],
        'password' => $_POST['password']
    ];
$auth = new model($koneksi);
$auth->userModelRegister($userRegist['username'],$userRegist['email'],$userRegist['password']);

}
?>