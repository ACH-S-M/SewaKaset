<?php 
    include __DIR__.'/../koneksi/koneksi.php';

class model{
    private $koneksi;
    public function __construct($database){
        $this->koneksi = $database;
    }
    public function userModel($email){
      $sql = "SELECT username,email,password,roles FROM user where email=?";
      $prepare = mysqli_prepare($this->koneksi,$sql);
      $prepare->bind_param('s',$email);
       $prepare->execute();
       return $result = $prepare->get_result()->fetch_assoc();  
    }
}
?>