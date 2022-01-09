<?php
// array associative
// definisinya sama seperti array numerik, kecuali
// key-nya adalah string yang kita buat sendiri
$mahasiswa = [
    [
        "nama" => "Amanda Rozi Kurnia", 
        "nrp" => "05111940000094", 
        "email" => "amandarozikurnia@gmail.com",
        "jurusan" => "Teknik Informatika",
        "gambar" => "amanda.png",
        "tugas" => [60, 80, 100]
    ],
    [
        "nama" => "Tri Diana", 
        "nrp" => "05111940000100", 
        "email" => "tridiana@gmail.com",
        "jurusan" => "Manajemen Bisnis",
        "gambar" => "rozi.jpg",
        "tugas" => [60, 80, 100]
    ]
];

// echo $mahasiswa[1]["tugas"][1];
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Array Associative</title>
</head>
<body>
    <h1>Daftar Mahasiswa</h1>
    <?php foreach($mahasiswa as $mhs) : ?>
        <ul>
            <li>
                <img src="img/<?php echo $mhs["gambar"]; ?>" alt="<?php echo $mhs["gambar"]; ?>" width="100px">
            </li>
            <li>Nama: <?= $mhs["nama"];?></li>
            <li>NRP: <?= $mhs["nrp"];?></li>
            <li>Email: <?= $mhs["email"];?></li>
            <li>Jurusan: <?= $mhs["jurusan"];?></li>
        </ul>
    <?php endforeach; ?>
</body>
</html>