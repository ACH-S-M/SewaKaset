<?php 
    include '../koneksi/koneksi.php';

class model{
    private $koneksi;
    public function __construct($database){
        $this->koneksi = $database;
    }
    public function userModel($email){
      $sql = "SELECT email,password FROM user where email=?";
      $prepare = mysqli_prepare($this->koneksi,$sql);
      $prepare->bind_param('s',$email);
       $prepare->execute();
       return $result = $prepare->get_result()->fetch_assoc();  
    }
}
?>