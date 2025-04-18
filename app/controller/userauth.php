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
        $login = $this->usermodel->userModelLogin($email);
        if ($login && password_verify($password,$login['password'])){
            $_SESSION['email'] = $login['email'];
            $_SESSION['username'] = $login['username'];
            $_SESSION['IDPEMBELI'] = $login['IDPEMBELI'];
            header('location:http://sewakaset.test/');
        }else {
          echo "<script>
            alert('gagal, email atau password salah')
            window.location.href = 'http://sewakaset.test/app/view/login.php'
          </script>";

        }
    }
    
    public function authentikasiSesi(){
        if (!isset($_SESSION['email'])){
            header('location=/index.php');
            exit();
        }
    }
    public function logout(){
        session_unset();
        session_destroy();
        header("location: http://sewakaset.test/");
        exit();
    }
  }

?>