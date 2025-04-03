<?php 
include 'koneksi.php';
  class user{
    private $konek;
    public function __construct($database){
        $this->konek = $database;
    }
    public function userLogin($email,$password){
        $sql = "SELECT email,password FROM user";
        $verifypass = password_verify($password,PASSWORD_DEFAULT);
            $prepare = mysqli_prepare($this->konek,$sql);
            $prepare->bind_param('ss',$email,$verifypass);
       $result = $prepare->execute();
       return $result;
    }
  }

?>