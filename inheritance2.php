<?php

//jualan produk 
// komik
// game

class Produk {
   public $judul,
          $penulis,
          $penerbit,
          $harga,
          $jmlHalaman,
          $waktuMain;

    public function __construct($judul = "-", $penulis = "-", $penerbit = "-", $harga="-", $jmlHalaman = 0, $waktuMain = 0)
    {
        $this->judul = $judul;
        $this->penulis = $penulis;
        $this->penerbit = $penerbit;
        $this->harga = $harga;
        $this->jmlHalaman = $jmlHalaman;
        $this->waktuMain = $waktuMain;
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

class Komik extends Produk {
    public function getInfoProduk (){
        $str = "Komik : {$this->judul} | {$this->getLabel()} (Rp. {$this->harga}) - {$this->jmlHalaman} halaman.";
        return $str;
    }
}

class Game extends Produk {
    public function getInfoProduk (){
        $str = "Game : {$this->judul} | {$this->getLabel()} (Rp. {$this->harga}) ~ {$this->waktuMain} Jam.";
        return $str;
    }
}

$produk1 = new Komik("Naruto", "Masashi Kishimoto", "Elex Media Komputindo", 35000, 150, 0);
$produk2 = new Game("Uncharted", "Neil Druckman", "Sony Komputer", 500000, 0, 50);


echo $produk1->getLabel();
echo  "<hr>";
echo $produk2->getLabel();
echo "<br>";
$infoProduk1 = new CetakInfoProduk();
echo $infoProduk1->cetak($produk1);
echo "<br>";
echo $produk1->getInfoProduk();
echo "<br>";
echo $produk2->getInfoProduk();

