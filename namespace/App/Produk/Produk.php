<?php namespace App\Produk;
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
            throw new \Exception("judul harus string");
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
            throw new \Exception("penulis harus string");
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
            throw new \Exception("penerbit harus string");
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
