<?php

//jualan produk 
// komik
// game

interface InfoProduk
{
    public function getInfoProduk();
};

abstract class Produk
{
    protected $judul,
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

    abstract public function getInfo();

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

class CetakInfoProduk
{
    public $daftarProduk = [];

    public function tambahProduk(produk $produk)
    {
        $this->daftarProduk[] = $produk;
    }

    public function cetak()
    {
        $str = "Daftar Produk : <br>";
        foreach ($this->daftarProduk as $p) {
            $str .= "{$p->getInfoProduk()} <br>";
        }
        return $str;
    }
}

class Komik extends Produk implements InfoProduk
{
    public $jmlHalaman;
    public function __construct($judul = "-", $penulis = "-", $penerbit = "-", $harga = "-", $jmlHalaman = 0)
    {
        parent::__construct($judul, $penulis, $penerbit, $harga);
        $this->jmlHalaman = $jmlHalaman;
    }

    public function getInfoProduk()
    {
        $str = "Komik : " . $this->getInfo() . "- {$this->jmlHalaman} halaman.";
        return $str;
    }

    public function getInfo()
    {
        $str = "{$this->judul} | {$this->penulis}, {$this->penerbit} (Rp. {$this->harga})";
        return $str;
    }
}

class Game extends Produk implements InfoProduk
{
    public $waktuMain;
    public function __construct($judul = "-", $penulis = "-", $penerbit = "-", $harga = "-", $waktuMain = 0)
    {
        parent::__construct($judul, $penulis, $penerbit, $harga);
        $this->waktuMain = $waktuMain;
    }

    public function getInfoProduk()
    {
        $str = "Game : " . $this->getInfo() . " ~ {$this->waktuMain} Jam.";
        return $str;
    }

    public function getInfo()
    {
        $str = "{$this->judul} | {$this->penulis}, {$this->penerbit} (Rp. {$this->harga})";
        return $str;
    }
}

$produk1 = new Komik("Naruto", "Masashi Kishimoto", "Elex Media Komputindo", 35000, 150);
$produk2 = new Game("Uncharted", "Neil Druckman", "Sony Komputer", 500000, 50);

$cetakProduk = new CetakInfoProduk();
$cetakProduk->tambahProduk($produk1);
$cetakProduk->tambahProduk($produk2);
echo $cetakProduk->cetak();