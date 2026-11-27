<?php

// Mendefinisikan Class Kendaraan
class Kendaraan
{
    // Properties (Atribut)
    public $merk;
    public $model;
    public $warna;
    public $tahun;

    // Method (Perilaku)
    public function tampilkanInfo()
    {
        echo "Kendaraan : {$this->merk} {$this->model}" . PHP_EOL;
        echo "Warna     : {$this->warna}" . PHP_EOL;
        echo "Tahun     : {$this->tahun}" . PHP_EOL;
        echo "-----------------------------------" . PHP_EOL;
    }

    public function nyalakanMesin()
    {
        return "Mesin {$this->merk} {$this->model} menyala: Brummm!" . PHP_EOL;
    }
}

echo "=== IMPLEMENTASI CLASS & OBJECT ===" . PHP_EOL . PHP_EOL;

// Instansiasi Object pertama
$mobil1 = new Kendaraan();
$mobil1->merk = "Toyota";
$mobil1->model = "Avanza";
$mobil1->warna = "Hitam";
$mobil1->tahun = 2022;

// Instansiasi Object kedua
$mobil2 = new Kendaraan();
$mobil2->merk = "Honda";
$mobil2->model = "Civic";
$mobil2->warna = "Putih";
$mobil2->tahun = 2024;

// Memanggil method dari masing-masing object
$mobil1->tampilkanInfo();
echo $mobil1->nyalakanMesin() . PHP_EOL;

$mobil2->tampilkanInfo();
echo $mobil2->nyalakanMesin();