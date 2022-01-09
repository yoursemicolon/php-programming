<?php
// pertemuan 2 - php dasar
// sintaks php

// standar output
// echo, print

// Digunakan untuk debugging
// print_r(); untuk mencetak string atau array
// var_dump(); untuk melihat isi variabel, tipe datanya dan ukurannya berapa

// echo angka tidak perlu pakai tanda kutip

// Penulisan sintaks html
// 1. php di dalam html
// 2. html di dalam php

// Variabel dan tipe data
// variabel, tidak perlu mendeskripsikan tipe datanya (seperti js)
$nama = "amanda";
echo "Halo, nama saya $nama <br>";

// Operator
// aritmatika
// $x = 10;
// $y = 20;
// echo $x * $y;

// Penggabungan string / concatenation / concat
// .  (titik), kalau di js + (plus)
$nama_depan = "Amanda Rozi";
$nama_belakang = "Kurnia";
echo $nama_depan . " " . $nama_belakang . "<br>";

// assignment, operator penugasan
// =, +=, -+, *=, /=, %=, .=
// $x = 1;
// $x += 5;
// echo $x;

// $name = "Amanda";
// $name .= " ";
// $name .= "Rozi Kurnia";
// echo $name;

// perbandingan, tidak mengecek tipe data
// var_dump(1 == 5);
// var_dump(1 == "1");

// identitas, false
var_dump(1 === "1");

// logika

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Belajar PHP</title>
</head>

<body>
    <!-- php di dalam html -->
    <h1>Halo, selamat datang <?php echo $nama; ?></h1>
    <p><?php echo "Ini adalah paragraf"; ?></p>

    <!-- html di dalam php -->
    <!-- Tidak disarankan -->
    <?php
        echo "<h1>Halo, selamat datang Amanda!</h1>"
    ?>
</body>

</html>