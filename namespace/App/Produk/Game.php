<?php namespace App\Produk;

require_once 'App/init.php';

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