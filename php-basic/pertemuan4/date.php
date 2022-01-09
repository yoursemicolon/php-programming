<?php
    // Date, menampilkan tanggal dgn format tertentu
    // menampilkan tanggal hari ini
    // echo date("l, d-M-Y");

    // Time
    // menampilkan detik
    // UNIX timestamp / EPOCH time, asal mula waktu di dunia IT
    // detik yang sudah berlalu sejak 1 Januari 1970 hingga sekarang
    // echo time();

    // menganggabungkan DATE dan TIME
    // cari detik yang dilalui dari detik ini sampai 2 hari ke depan
    // echo date("d M Y", time() - 60 * 60 * 24 * 2);

    // mktime
    // membuat sendiri detik
    // mktime(0,0,0,0,0,0)
    // jam, menit, detik, bulan, tanggal, tahun
    // echo date("l, d M Y", mktime(0,0,0,12,3,2000));

    // strtotime
    // kebalikan mktime
    echo date("l", strtotime("3 dec 2000"));

?>