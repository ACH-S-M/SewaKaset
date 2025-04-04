<?php 
include '../controller/userauth.php';
include '../koneksi/koneksi.php';

$user = new user($koneksi);
$user->authentikasiSesi();

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Menu</h1>
          <?php echo $_SESSION['email'] ?>
</body>
</html>