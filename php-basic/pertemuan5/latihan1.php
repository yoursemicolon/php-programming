<?php
// array
// variabel yg bisa menampung lebih dari satu nilai supaya mudah mengelola datanya
// elemen pada array boleh memiliki tipe data yang berbeda
// pasangan key dan value
// key-nya adalah index yang dimulai dari 0

// ada 2 cara membuat array
// cara lama
$hari =  array("Senin", "Selasa", "Rabu");

// cara baru
// $bulan = ["Januari", "Februari", "Januari"];
// $arr = [123, "senin", true];

// menampilkan array
// ada tipe datanya
// var_dump($hari);
// echo "<br>";

// // menampilkan array dgn lebih ringkas
// // tdk ada tipe datanya
// print_r($bulan);
// echo "<br>";

// // menampilkan 1 elemen pada array
// echo $arr[1];
// echo "<br>";

// echo $bulan[1];

// menambah elemen baru
$hari[] = "Kamis";
var_dump($hari);





?>