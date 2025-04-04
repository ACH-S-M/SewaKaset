<?php 
include __DIR__ . '/../koneksi/koneksi.php';
include __DIR__ . '/../model/userModel.php';

session_start();
  class user{
    private $usermodel;
    public function __construct($database){
        $this->usermodel = new model($database);
    }
    public function userLogin($email,$password){
        $user = $this->usermodel->userModel($email);
        if ($user && password_verify($password,$user['password'])){
            $_SESSION['email'] = $user['email'];
            header('location:../view/menu.php');
        }else {
            header('location=/index.php?error=gagal');
            exit;
        }
    }
    
    public function authentikasiSesi(){
        if (!isset($_SESSION['user'])){
            header('location=/index.php');
            exit();
        }
    }

  }

?>