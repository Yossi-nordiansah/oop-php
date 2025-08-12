<?php

//jualan produk 
// komik
// game

class Produk {
   public $judul,
          $penulis,
          $penerbit,
          $harga;
    
    public function getLabel(){
        return "$this->penulis, $this->penerbit";
    }
}

$produk1 = new Produk();
$produk1-> judul = "Naruto";
$produk1-> penulis = "Masashi Kishimoto";
$produk1-> penerbit = 'Shonen Jump';
$produk1-> harga = 30000;

$produk2 = new Produk();
$produk2-> judul = "Uncharted";
$produk2-> penulis = "Neil Druckman";
$produk2-> penerbit = 'Sony Computer';
$produk2-> harga = 250000;

echo $produk1->getLabel();
echo  "<hr>";
echo $produk2->getLabel();