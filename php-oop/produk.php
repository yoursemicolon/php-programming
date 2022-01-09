<?php

// jualan produk
// komik
// game

class Produk {

    // properti yg sama dari komik dan game
    public $judul = "judul";
    public $penulis;
    public $penerbit;
    public $harga; 

    // public function sayHello() {
    //     return "Hello world!";
    // }
    
    // menampilkan label penulis dan penerbit
    public function getLabel() {
        return "$this->penulis, $this->penerbit";
    }

}

// objek
// $produk1 = new Produk();
// $produk1->judul = "Naruto"; // menimpa judul default

// var_dump($produk1);

// $produk2 = new Produk();
// $produk2->judul = "enchanted";

// var_dump($produk2);

$produk3 = new Produk();

// menimpa default valuenya
$produk3->judul = "Naruto";
$produk3->penulis = "Masashi Kishimoto";
$produk3->penerbit = "Shonen Jump";
$produk3->harga = 30000;
// var_dump($produk3);

// echo "Komik: $produk3->penulis, $produk3->penerbit";

// echo "<br>";
// echo $produk3->getLabel();
// echo $produk3->sayHello();

// echo "<br>";

$produk4 = new Produk();
$produk4->judul = "Uncharted";
$produk4->penulis = "Neil Bruckmann";
$produk4->penerbit = "Sony Computer";
$produk4->harga = 250000;

echo "Komik: " . $produk3->getLabel();
echo "<br>";
echo "Game: " . $produk4->getLabel();

?>