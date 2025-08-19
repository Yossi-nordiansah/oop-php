<?php

//jualan produk 
// komik
// game

class Produk
{
    private $judul,
        $penulis,
        $penerbit,
        $harga,
        $diskon;

    public function __construct($judul = "-", $penulis = "-", $penerbit = "-", $harga = "-")
    {
        $this->judul = $judul;
        $this->penulis = $penulis;
        $this->penerbit = $penerbit;
        $this->harga = $harga;
    }

    public function getLabel()
    {
        return "$this->penulis, $this->penerbit";
    }

    public function getInfoProduk()
    {
        $str = "{$this->judul} | {$this->penulis}, {$this->penerbit} (Rp. {$this->harga})";
        return $str;
    }

    public function getJudul()
    {
        return $this->judul;
    }

    public function setJudul($judul)
    {
        if (!is_string($judul)) {
            throw new Exception("judul harus string");
        }
        $this->judul = $judul;
    }

    public function getHarga()
    {
        $hargaAkhir = $this->harga - ($this->harga * $this->diskon / 100);
        return "Rp. " . $hargaAkhir;
    }

    public function setHarga($harga)
    {
        $this->harga = $harga;
    }

    public function getPenulis()
    {
        return $this->penulis;
    }

    public function setPenulis($penulis)
    {
        if (!is_string($penulis)) {
            throw new Exception("penulis harus string");
        }
        $this->penulis = $penulis;
    }

    public function getPenerbit()
    {
        return $this->penerbit;
    }

    public function setPenerbit($penerbit)
    {
        if (!is_string($penerbit)) {
            throw new Exception("penerbit harus string");
        }
        $this->penerbit = $penerbit;
    }

      public function setDiskon($diskon)
    {
        $this->diskon = $diskon;
    }

      public function getDiskon($diskon)
    {
        return $this->diskon = $diskon;
    }
}

class Komik extends Produk
{
    public $jmlHalaman;
    public function __construct($judul = "-", $penulis = "-", $penerbit = "-", $harga = "-", $jmlHalaman = 0)
    {
        parent::__construct($judul, $penulis, $penerbit, $harga);
        $this->jmlHalaman = $jmlHalaman;
    }

    public function getInfoProduk()
    {
        $str = "Komik : " . parent::getInfoProduk() . "- {$this->jmlHalaman} halaman.";
        return $str;
    }
}

class Game extends Produk
{
    public $waktuMain;
    public function __construct($judul = "-", $penulis = "-", $penerbit = "-", $harga = "-", $waktuMain = 0)
    {
        parent::__construct($judul, $penulis, $penerbit, $harga);
        $this->waktuMain = $waktuMain;
    }

    public function getInfoProduk()
    {
        $str = "Game : " . parent::getInfoProduk() . " ~ {$this->waktuMain} Jam.";
        return $str;
    }
}

$produk1 = new Komik("Naruto", "Masashi Kishimoto", "Elex Media Komputindo", 35000, 150);
$produk2 = new Game("Uncharted", "Neil Druckman", "Sony Komputer", 500000, 50);


echo $produk1->getLabel();
echo  "<hr>";
echo $produk2->getLabel();
echo "<br>";
echo "<br>";
echo $produk1->getInfoProduk();
echo "<br>";
echo $produk2->getInfoProduk();
echo  "<hr>";
$produk1->setDiskon(10);
echo $produk1->getHarga();
echo  "<br>";
$produk2->setDiskon(10);
echo $produk2->getHarga();
echo  "<hr>";
$produk1->setJudul("Boruto");
echo $produk1->getPenerbit();
