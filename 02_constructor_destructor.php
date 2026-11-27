<?php

class Mahasiswa
{
    public $nim;
    public $nama;
    public $jurusan;

    // Constructor: otomatis dijalankan saat object dibuat (new)
    public function __construct($nim, $nama, $jurusan)
    {
        $this->nim = $nim;
        $this->nama = $nama;
        $this->jurusan = $jurusan;
        echo "[CONSTRUCTOR] Data mahasiswa '{$this->nama}' berhasil diinisialisasi." . PHP_EOL;
    }

    public function tampilkanProfil()
    {
        echo "NIM     : {$this->nim}" . PHP_EOL;
        echo "Nama    : {$this->nama}" . PHP_EOL;
        echo "Jurusan : {$this->jurusan}" . PHP_EOL . PHP_EOL;
    }

    // Destructor: otomatis dijalankan saat object dihapus atau skrip selesai dieksekusi
    public function __destruct()
    {
        echo "[DESTRUCTOR] Memori untuk object '{$this->nama}' telah dibersihkan." . PHP_EOL;
    }
}

echo "=== IMPLEMENTASI CONSTRUCTOR & DESTRUCTOR ===" . PHP_EOL . PHP_EOL;

$mhs1 = new Mahasiswa("2201001", "Andi Pratama", "Sistem Informasi");
$mhs1->tampilkanProfil();

$mhs2 = new Mahasiswa("2201002", "Siti Rahmawati", "Teknik Informatika");
$mhs2->tampilkanProfil();

echo "Menghapus object pertama secara manual dengan unset()..." . PHP_EOL;
unset($mhs1);

echo PHP_EOL . "Akhir dari baris kode utama (destructor sisa object akan berjalan otomatis):" . PHP_EOL;