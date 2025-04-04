<?php 
include '../controller/userauth.php';
include '../koneksi/koneksi.php';
$usernya = new user($koneksi);
$usernya->logout();
?>