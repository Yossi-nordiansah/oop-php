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
          $waktuMain,
          $tipe;

    public function __construct($judul = "-", $penulis = "-", $penerbit = "-", $harga="-", $jmlHalaman = 0, $waktuMain = 0, $tipe="Komik")
    {
        $this->judul = $judul;
        $this->penulis = $penulis;
        $this->penerbit = $penerbit;
        $this->harga = $harga;
        $this->jmlHalaman = $jmlHalaman;
        $this->waktuMain = $waktuMain;
        $this->tipe = $tipe;
    }
    
    public function getLabel(){
        return "$this->penulis, $this->penerbit";
    }

    public function getInfoLengkap(){
        $str = "{$this->tipe} : {$this->judul} | {$this->penulis}, {$this->penerbit} (Rp. {$this->harga})";
        if($this->tipe === "Komik"){
            $str .= " - {$this->jmlHalaman} halaman.";
        } else {
            $str .= " ~ {$this->waktuMain} jam.";
        }
        return $str;
    }
}

class CetakInfoProduk {
    public function cetak (Produk $produk){
        $str = "{$produk->judul} | {$produk->getLabel()}, (Rp. {$produk->harga})";
        return $str;
    }
}

$produk1 = new Produk("Naruto", "Masashi Kishimoto", "Elex Media Komputindo", 35000, 150, 0, "Komik");
$produk2 = new Produk("Uncharted", "Neil Druckman", "Sony Komputer", 500000, 0, 50, "Game");


echo $produk1->getLabel();
echo  "<hr>";
echo $produk2->getLabel();
echo "<br>";
$infoProduk1 = new CetakInfoProduk();
echo $infoProduk1->cetak($produk1);
echo "<br>";
echo $produk1->getInfoLengkap();
echo "<br>";
echo $produk2->getInfoLengkap();

