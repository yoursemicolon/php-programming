<?php
// koneksi ke database
// driver mysqli connect, parameternya ada 4
// mysqli_connect("hostname", "username", "password", "database name");

$conn = mysqli_connect("localhost", "root", "", "phpdasar");

// ambil data dari tabel mahasiswa
// query datanya
// mysqli_query, parameternya ada 2
// yang pertama adalah parameter koneksinya
// yang kedua adalah query sql-nya dlm bentuk string
$result = mysqli_query($conn, "SELECT * FROM mahasiswa");
// var_dump($result);

// ambil data (fetch) mahasiswa dari object result

// mysqli_fetch_row(), mengembalikan array numerik / indeksnya angka
// mysqli_fetch_assoc(), mengembalikan array associative
// mysql_fetch_array(), mengembalikan keduanya, kekurangannya data yg disajikan double, lebih berat
// mysql_fetch_object(), mengembalikan object. tidak punya key. panggilnya pakai panah ->nama dll

// looping sampai habis
// while($mhs = mysqli_fetch_assoc($result)) {
//     var_dump($mhs);
// }

// cara ngecek error
if(!$result) {
    echo mysqli_error($conn);
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Halaman Admin</title>
    <style>
        /* centered image */
        td .center {
            display: block;
            margin-left: auto;
            margin-right: auto;
        }
    </style>
</head>
<body>
    <h1>Daftar Mahasiswa</h1>
    
    <!-- data statis, tulis manual -->
    <table border="1" cellpadding="10" cellspacing="0">
        <tr>
            <th>No.</th>
            <th>Aksi</th>
            <th>Gambar</th>
            <th>NRP</th>
            <th>Nama</th>
            <th>Email</th>
            <th>Jurusan</th>
        </tr>

        <?php $i = 1; ?>
        <?php while($row = mysqli_fetch_assoc($result)) : ?>
            <tr>
                <td><?= $i; ?></td>
                <td>
                    <a href="">Ubah</a> |
                    <a href="">Hapus</a>
                </td>
                <td>
                    <img src="img/<?php echo $row["gambar"]?>" alt="<?php echo $row["gambar"]?>" width="50px" class="center">
                </td>
                <td><?= $row["nrp"]; ?></td>
                <td><?= $row["nama"]; ?></td>
                <td><?= $row["email"]; ?></td>
                <td><?= $row["jurusan"]; ?></td>
            </tr>
        <?php $i++; ?>
        <?php endwhile; ?>
</body>
</html>
