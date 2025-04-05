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
        $sql = "SELECT * from vcd";
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
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title></title>
</head>
<body>
    <!-- <?php foreach($listproduk as $barang) : ?>
            <h1><?=$barang['IDVCD']  ?></h1>
            <h1><?=$barang['namakaset']  ?></h1>
    <?php endforeach?> -->
</body>
</html>