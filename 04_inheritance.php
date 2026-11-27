<?php

// Parent Class (Superclass)
class Produk
{
    protected $namaProduk;
    protected $harga;

    public function __construct($namaProduk, $harga)
    {
        $this->namaProduk = $namaProduk;
        $this->harga = $harga;
    }

    public function getInfoProduk()
    {
        return "{$this->namaProduk} - Rp" . number_format($this->harga, 0, ',', '.');
    }
}

// Child Class 1 (Subclass) mewarisi Produk
class Buku extends Produk
{
    private $penulis;
    private $jumlahHalaman;

    public function __construct($namaProduk, $harga, $penulis, $jumlahHalaman)
    {
        // Memanggil constructor milik Parent Class
        parent::__construct($namaProduk, $harga);
        $this->penulis = $penulis;
        $this->jumlahHalaman = $jumlahHalaman;
    }

    // Method Overriding: menimpa dan memperluas method getInfoProduk() milik parent
    public function getInfoProduk()
    {
        return "[Buku] " . parent::getInfoProduk() . " | Penulis: {$this->penulis} ({$this->jumlahHalaman} hal.)";
    }
}

// Child Class 2 (Subclass) mewarisi Produk
class Elektronik extends Produk
{
    private $garansiBulan;

    public function __construct($namaProduk, $harga, $garansiBulan)
    {
        parent::__construct($namaProduk, $harga);
        $this->garansiBulan = $garansiBulan;
    }

    public function getInfoProduk()
    {
        return "[Elektronik] " . parent::getInfoProduk() . " | Garansi: {$this->garansiBulan} Bulan";
    }
}

echo "=== IMPLEMENTASI INHERITANCE (PEWARISAN) ===" . PHP_EOL . PHP_EOL;

$produk1 = new Buku("Pemrograman PHP Modern", 125000, "Rizky Hidayat", 320);
$produk2 = new Elektronik("Keyboard Mechanical", 650000, 12);

echo $produk1->getInfoProduk() . PHP_EOL;
echo $produk2->getInfoProduk() . PHP_EOL;