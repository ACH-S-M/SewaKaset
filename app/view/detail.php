<?php 
include '../controller/userauth.php';
include '../koneksi/koneksi.php';
include '../model/produkModel.php';
include 'navbarbg.php';
class getItem{
    private $koneksi;
    public function __construct($konek){
        $this->koneksi = $konek;
    }
    function query(){
        $id = $_GET['bukuGet'] ;
        $sql = "SELECT * FROM vcd where IDVCD=$id";
        $query = mysqli_query($this->koneksi,$sql);
        if (!$query){
            die('gagal menyambungkan'.mysqli_error($this->koneksi));
        }
        return $dataitem = mysqli_fetch_assoc($query);
    }
   }
 if (isset($_GET['bukuGet'])){
    $item = new getItem($koneksi);
    $data = $item->query();
    var_dump($data['IDVCD']);
 }
 

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Detail </title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.2/css/all.min.css" integrity="sha512-Evv84Mr4kqVGRNSgIGL/F/aIDqQb7xQ2vcrdIwxfjThSH8CSR7PBEakCr51Ck+w+/U6swU2Im1vVX0SVk9ABhg==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <script src="https://cdn.jsdelivr.net/npm/@tailwindcss/browser@4"></script> 
</head>
<body>
    <main>
    <section class="detail flex flex-col md:flex-row p-4 md:p-6 gap-4 md:gap-6">
    <!-- GAMBAR -->
    <img src="data:image/jpeg;base64,<?= base64_encode($data['foto_produk']) ?>" 
         alt="foto"  
         class="w-full max-w-md h-auto md:w-[400px] md:h-[300px] object-contain rounded-md mx-auto md:mx-0">

    <!-- KONTEN -->
    <div class="title-content flex flex-col justify-between">
        <div>
            <h1 class="text-2xl md:text-3xl font-bold text-center md:text-left">
                <?php echo $data['namakaset']?>

            </h1>
            <h2 class="text-lg md:text-xl text-center md:text-left mt-2">
                Rp. <?= $data['harga'] ?>,00
            </h2>
            <p class="mt-4 font-semibold">Deskripsi:</p>
            <p class="text-sm md:text-base text-justify">
                <?= $data['deskripsi'] ?>
            </p>
        </div>

        <!-- BUTTON -->
        <div class="action-btn mt-6">
            <!-- //masing masing kasih parameter di url deh make action yg beda beda, nanti tangkep ID sesuai konteks --> 
             <a href="http:/\/sewakaset.test/app/view/sewa.php?sewaKaset=<?=$data['IDVCD']?>">
             <button class="bg-blue-800 rounded-md text-white px-6 py-2 text-sm w-full sm:w-auto" type="submit">
                    Sewa
                </button>
             </a>

            <form>
                <button class="bg-green-500 rounded-md text-white px-6 py-2 text-sm w-full sm:w-auto flex items-center justify-center gap-2" type="submit">
                    <i class="fa-solid fa-cart-shopping"></i>
                    Tambah ke Keranjang
                </button>
            </form>
        </div>
    </div>
</section>

        <section class="more">
    
        </section>
    </main>
</body>
</html>