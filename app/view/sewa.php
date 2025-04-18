<?php 
include '../controller/userauth.php';
include '../koneksi/koneksi.php';
include '../model/produkModel.php';
include 'navbarbg.php';


 class getUser{
    
    private $koneksiphp;
        public function __construct($konek){
            $this->koneksiphp = $konek;
        }
        public function UserSewa(){
            $thisuser = $_SESSION['IDPEMBELI'];
            return $thisuser;
        }
        public function kasetdipilih(){
            $GetId = $_GET['sewaKaset'];
            $query = "SELECT * FROM vcd where IDVCD = $GetId";
            $result = mysqli_query($this->koneksiphp, $query);
            $getarray = mysqli_fetch_assoc($result);
             return $idNya = $getarray['IDVCD'];
            
        }
        public function action($akun,$IDVCD){
            $query = "INSERT INTO pelanggan_merental_vcd(IDPEMBELI,IDVCD) values(?,?)";
            $prepare = mysqli_prepare($this->koneksiphp,$query);
            $prepare->bind_param('ii',$akun,$IDVCD);
            $prepare->execute();
            $result = $prepare->get_result();
            return $result;
        }

}
$tesKaset = new getUser($koneksi);
$idKaset = $tesKaset->kasetdipilih();
 function dataSewa($id){
    global $koneksi;
    $sql = "SELECT * FROM vcd where IDVCD = $id";
    $query = mysqli_query($koneksi,$sql);
    return $query->fetch_assoc();
 }
 $getData = dataSewa($idKaset);
 
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://cdn.jsdelivr.net/npm/@tailwindcss/browser@4"></script> 
    <title>Document</title>
</head>
<body>
   <div class="w-full h-screen  flex flex-col items-center">
   <h1 class="text-3xl font-bold text-center mb-8">Penyewaaan Kaset </h1>
        <div class="flex items-center mb-4 ">
            <h1>Nama kaset : </h1>
            <h1 class="text-xl"><?php echo $getData['namakaset']?></h1>
        </div>
        <form action="sewaProses.php">
        <label for="lama">Lama Penyewaan:</label>
                <select name="lama" id="lama" class="border-2 p-2 bg-blue-800 text-white" >
                    <option value="" disabled selected>Pilih lama penyewaan</option>
                    <option value="1">1 Hari</option>
                    <option value="3">3 Hari</option>
                    <option value="7">1 Minggu</option>
                    <option value="30">1 Bulan</option>
                </select>
        </form>
   </div>
</body>
</html>