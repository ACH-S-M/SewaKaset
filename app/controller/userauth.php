<?php 
include '../koneksi/koneksi.php';
include '../model/userModel.php';
session_start();
  class user{
    private $usermodel;
    public function __construct($database){
        $this->usermodel = new model($database);
    }
    public function userLogin($email,$password){

        $user = $this->usermodel->userModel($email);
        if ($user && password_verify($password,$user['password'])){
           $_SESSION['user'] = [
                'email' => $email
           ];
        }else {
            echo "login gagal";
        }
    }
    public function authentikasiSesi(){
        if (!isset($_SESSION['user'])){
            header('location:index.php');
            exit();
        }
    }

  }

?>