<?php 
include '../controller/userauth.php';
include '../koneksi/koneksi.php';
include '../model/produkModel.php';
include 'navbarbg.php';

    $id = $_GET['bukuGet'];
    $sql = "SELECT * FROM vcd where IDVCD=$id";
    $query = mysqli_query($koneksi,$sql);
    $data = mysqli_fetch_assoc($query);


?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Detail </title>
    <script src="https://cdn.jsdelivr.net/npm/@tailwindcss/browser@4"></script> 
</head>
<body>
    <main>
        <section class="detail flex p-6 gap-6">
             <img src="data:image/jpeg;base64,<?= base64_encode($data['foto_produk']) ?>" alt="foto"  class="w-[400px] h-[300px] object-contain rounded-md">
                <div class="title-content">
                    <h1 class="text-3xl font-bold" ><?php echo $data['namakaset']?> </h1>
                    <h1 class="text-xl " ><?php echo 'IDR. '.$data['harga'].',00'?> </h1>
                </div>
       
        </section>
        <section class="more">
    
        </section>
    </main>
</body>
</html>