<?php 
 include '../koneksi/koneksi.php';
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
        $query = mysqli_query($this->koneksi,$sql);
        if ($query->num_rows > 0){
             while($data = mysqli_fetch_assoc($query)){
                $idbarang = $data['IDVCD'];
                $namabarang =$data['namakaset'];
                echo "id barangnya :  $idbarang dan nama barangnya : $namabarang";
              }
        }else {
            echo "gagal fetching data";
        }
    }
 }
 $produk = new Produk($koneksi);
 $produk->getProduk();
?>