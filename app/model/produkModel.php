<?php 
include __DIR__ . '/../koneksi/koneksi.php';

 class Produk{
    private $koneksi;
    public function __construct($database){
        $this->koneksi = $database;
    }
    public function setProduk(){
        //insert kode disini 
    }
    public function getProduk(){
        //select produk disini 
        $sql = "SELECT * from vcd limit 5";
        $query = mysqli_prepare($this->koneksi,$sql);
         if ($query->execute()){
            $result = $query->get_result();
            $products = [];
            while ($data = mysqli_fetch_assoc($result)){
                $products[] = $data;
            }
            return $products;
         }else {
            echo "gagal fetching";
            return [];
         }
    }
 }
 $produk = new Produk($koneksi);
$listproduk = $produk->getProduk();



?>
