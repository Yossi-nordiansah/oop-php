<?php
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