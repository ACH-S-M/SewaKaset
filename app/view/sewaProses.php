<?php 
include '../controller/userauth.php';
include '../koneksi/koneksi.php';
include '../model/produkModel.php';
include 'navbarbg.php';
$kaset = new getUser(konek: $koneksi);
$akun = $kaset->UserSewa();
$namakaset = $kaset->kasetdipilih();
$sewa = $kaset->action($akun,$namakaset);

?>