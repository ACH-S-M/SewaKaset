<?php 
    include __DIR__.'/../koneksi/koneksi.php';

class model{
    private $koneksi;
    public function __construct($database){
        $this->koneksi = $database;
    }
    public function userModelLogin($email){
      $sql = "SELECT username,email,password,roles FROM user where email=?";
      $prepare = mysqli_prepare($this->koneksi,$sql);
      $prepare->bind_param('s',$email);
       $prepare->execute();
       return $result = $prepare->get_result()->fetch_assoc();  
    }
    public function userModelRegister($username,$email,$password){
        $hashPw = password_hash($password,PASSWORD_DEFAULT);
        $sql = "INSERT into user(username,email,password) values(?,?,?)";
         $prepare = mysqli_prepare($this->koneksi,$sql);
         $prepare->bind_param('sss',$username,$email,$hashPw);
         $prepare->execute();
         $result = $prepare->get_result();
         if ($result){
           echo "<script>
            alert('gagal mendaftar, silahkan daftar ulang')
            window.location.href = 'http://sewakaset.test/app/view/login.php'
          </script>";
          }else {
             echo "<script>
            alert('Akun Berhasil Dibuat')
            window.location.href = 'http://sewakaset.test/app/view/login.php'
          </script>";
          }
    }
}
?>