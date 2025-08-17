<?php

//jualan produk 
// komik
// game

class Produk {
   public $judul,
          $penulis,
          $penerbit,
          $harga;

    public function __construct($judul = "-", $penulis = "-", $penerbit = "-", $harga="-")
    {
        $this->judul = $judul;
        $this->penulis = $penulis;
        $this->penerbit = $penerbit;
        $this->harga = $harga;
    }
    
    public function getLabel(){
        return "$this->penulis, $this->penerbit";
    }
}

class CetakInfoProduk {
    public function cetak (Produk $produk){
        $str = "{$produk->judul} | {$produk->getLabel()}, (Rp. {$produk->harga})";
        return $str;
    }
}

$produk1 = new Produk("Naruto", "Masashi Kishimoto", "Elex Media Komputindo", 35000);
$produk2 = new Produk("Uncharted", "Neil Druckman", "Sony Komputer");


echo $produk1->getLabel();
echo  "<hr>";
echo $produk2->getLabel();
echo "<br>";
$infoProduk1 = new CetakInfoProduk();
echo $infoProduk1->cetak($produk1);
