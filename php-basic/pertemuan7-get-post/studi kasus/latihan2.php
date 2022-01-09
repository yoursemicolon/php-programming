<?php

// cek apakah ada data di $_GET
if( !isset($_GET["nama"]) || 
    !isset($_GET["kategori"]) || 
    !isset($_GET["harga"]) || 
    !isset($_GET["gambar"]) ) {
    // redirect
    header("Location: latihan1.php");
    exit;
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Detail Products</title>
    <style>
        img {
            border: 1px solid #000;
        }
    </style>
</head>
<body>
    <ul>
        <img src="img/<?= $_GET["gambar"]; ?>" alt="<?= $_GET["gambar"]; ?>" width="200px">
        <li>Nama: <?= $_GET["nama"]; ?></li>
        <li>Kategori: <?= $_GET["kategori"]; ?></li>
        <li>Harga: <?= $_GET["harga"]; ?></li>
    </ul>

    <a href="latihan1.php">Kembali ke daftar mahasiswa</a>
</body>
</html>