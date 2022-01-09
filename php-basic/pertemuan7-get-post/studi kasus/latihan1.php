<?php
// studi kasus ecommerce
$products = [
    [
        "nama" => "Kental Manis",
        "kategori" => "Susu",
        "harga" => "Rp13.000",
        "stok barang" => "222",
        "stok diskon" => "49",
        "masa penyimpanan" => "12 bulan",
        "gambar" => "kentalmanis.jpg"
    ],
    [
        "nama" => "Inone TWS",
        "kategori" => "Earphone",
        "harga" => "Rp119.900",
        "stok barang" => "2399",
        "stok diskon" => "92",
        "masa penyimpanan" => "Tidak ada",
        "gambar" => "earphone.jpg"
    ],
    [
        "nama" => "Palmolive",
        "kategori" => "Sabun Mandi",
        "harga" => "Rp40.000",
        "stok barang" => "40",
        "stok diskon" => "18",
        "masa penyimpanan" => "24 bulan",
        "gambar" => "palmolive.jpg"
    ],
    [
        "nama" => "Nong Shim Kimchi Ramyun",
        "kategori" => "Makanan",
        "harga" => "Rp9.500",
        "stok barang" => "1255",
        "stok diskon" => "27",
        "masa penyimpanan" => "3 bulan",
        "gambar" => "kimchi.jpg"
    ],
    [
        "nama" => "Madame Gie Magnifique Lip Liquide",
        "kategori" => "Make Up",
        "harga" => "Rp13.400",
        "stok barang" => "1369",
        "stok diskon" => "22904",
        "masa penyimpanan" => "24 bulan",
        "gambar" => "madam.jpg"
    ],
    [
        "nama" => "Kinderjoy",
        "kategori" => "Makanan",
        "harga" => "Rp8.999",
        "stok barang" => "250",
        "stok diskon" => "2",
        "masa penyimpanan" => "24 bulan",
        "gambar" => "kinderjoy.jpg"
    ],
    [
        "nama" => "Attact Liquid Plus Softener",
        "kategori" => "Sabun Cuci",
        "harga" => "Rp19.300",
        "stok barang" => "204",
        "stok diskon" => "39",
        "masa penyimpanan" => "24 bulan",
        "gambar" => "attack.jpg"
    ],
    [
        "nama" => "BenQ GW2480 24 inch IPS Full HD HDMI",
        "kategori" => "Monitor",
        "harga" => "Rp2.484.400",
        "stok barang" => "100",
        "stok diskon" => "13",
        "masa penyimpanan" => "Tidak ada",
        "gambar" => "benq.jpg"
    ],
    [
        "nama" => "Crewneck Basic Polos",
        "kategori" => "Sweater",
        "harga" => "Rp45.100",
        "stok barang" => "362068",
        "stok diskon" => "1000",
        "masa penyimpanan" => "Tidak ada",
        "gambar" => "sweater.jpg"
    ],
    [
        "nama" => "Daniel Wellington Iconic Link",
        "kategori" => "Jam Tangan",
        "harga" => "Rp3.550.000",
        "stok barang" => "2",
        "stok diskon" => "2",
        "masa penyimpanan" => "Tidak ada",
        "gambar" => "jamtangan.jpg"
    ]
];
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ecommerce GET</title>
    <style>
        img {
            border: 1px solid #555;
        }
    </style>
</head>
<body>
    <h1>Daftar Barang di EMart</h1>
    
    <ul>
        <?php foreach($products as $product) : ?>
            <li>
                <!-- pindah halaman sekalian kirim data -->
                <a href="latihan2.php?nama=<?= $product["nama"]; ?>&kategori=<?= $product["kategori"]; ?>&harga=<?= $product["harga"]; ?>&gambar=<?= $product["gambar"]; ?>">
                    <?= $product["nama"]; ?>
                </a>
            </li>
        <?php endforeach; ?>
    </ul>
    

</body>
</html>