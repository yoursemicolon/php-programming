<?php
$mahasiswa = [
    ["Amanda Rozi Kurnia", "05111940000094","amandarozikurnia@gmail.com", "Teknik Informatika"],
    ["Amanda Rozi Kurnia", "05111940000094","amandarozikurnia@gmail.com", "Teknik Informatika"]
];

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Latihan array</title>
</head>
<body>
    <h1>Daftar mahasiswa</h1>

    <?php foreach($mahasiswa as $student) : ?>
        <ul>
            <!-- cara pertama -->
            <?php // foreach($student as $mhs) : ?>
                <!-- <li><?php // echo $mhs; ?></li> -->
            <?php // endforeach; ?>

            <!-- cara kedua -->
            <li>Nama: <?= $student[0]; ?></li>
            <li>NRP: <?= $student[1]; ?></li>
            <li>Email: <?= $student[2]; ?></li>
            <li>Jurusan: <?= $student[3]; ?></li>
        </ul>
    <?php endforeach; ?>
</body>
</html>