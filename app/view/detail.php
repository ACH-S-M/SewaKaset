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
                    <h1 class="text-xl " ><?php echo 'Rp. '.$data['harga'].',00'?> </h1>
                    <p class="mt-5">Deskripsi : </p>
                        <p class="text-m">
                                <?php echo $data['deskripsi']?>
                         </p>
                    <div class="action-btn p-9">
                        <form action="" class="flex gap-12">
                            <button class="bg-blue-800 w-auto rounded-md h-11 text-white px-10 py-1">Beli <?php echo $data['harga']?></button>
                            <button class="bg-green-500  h-11 rounded-md text-white px-10 py-1">Sewa </button>
                        </form>
                    </div>
                </div>
       
        </section>
        <section class="more">
    
        </section>
    </main>
</body>
</html>