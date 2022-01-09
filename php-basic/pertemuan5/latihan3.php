<?php
// array multidimensi
// array di dalam array
// array numerik
$mahasiswa = [
    ["Amanda Rozi Kurnia", "05111940000094", "Teknik Informatika", "mandasan37@gmail.com"],
    ["Nur Febriansyah", "05111940000094", "Teknik Informatika", "mandasan37@gmail.com"],
    ["erik noah", "05111940000094", "Teknik Informatika", "mandasan37@gmail.com"]
];
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Daftar Mahasiswa</title>
</head>
<body>
    <h1>Daftar Mahasiswa</h1>

    <!-- menampilkan data mahasiswa dalam bentuk list -->
    <?php foreach($mahasiswa as $mhs) : ?>
        <ul>
            <li>
                <?php for($i = 0; $i < count($mhs); $i++) : 
                    echo $mhs[$i] . "<br>"; 
                endfor; ?>
            </li>
        </ul>
    <?php endforeach; ?>
</body>
</html>