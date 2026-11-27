<?php

class RekeningBank
{
    // Class Constant (nilainya tetap dan tidak bisa diubah)
    public const NAMA_BANK = "Bank Nusantara";
    public const BIAYA_ADMIN = 5000;

    // Access Modifiers: public, protected, private
    public $namaPemilik;
    protected $nomorRekening;
    private $saldo;

    public function __construct($namaPemilik, $nomorRekening, $saldoAwal)
    {
        $this->namaPemilik = $namaPemilik;
        $this->nomorRekening = $nomorRekening;
        $this->saldo = $saldoAwal;
    }

    // Getter untuk membaca property private ($saldo)
    public function getSaldo()
    {
        return $this->saldo;
    }

    // Setter / Method transaksi dengan validasi
    public function setorTunai($jumlah)
    {
        if ($jumlah > 0) {
            $this->saldo += $jumlah;
            echo "Setor tunai Rp" . number_format($jumlah, 0, ',', '.') . " berhasil." . PHP_EOL;
        } else {
            echo "Jumlah setoran harus lebih dari 0." . PHP_EOL;
        }
    }

    public function tarikTunai($jumlah)
    {
        // Mengakses constant di dalam class menggunakan self::
        $totalPenarikan = $jumlah + self::BIAYA_ADMIN;

        if ($jumlah > 0 && $this->saldo >= $totalPenarikan) {
            $this->saldo -= $totalPenarikan;
            echo "Tarik tunai Rp" . number_format($jumlah, 0, ',', '.') . " berhasil (Biaya admin Rp" . number_format(self::BIAYA_ADMIN, 0, ',', '.') . ")." . PHP_EOL;
        } else {
            echo "Penarikan gagal: Saldo tidak mencukupi atau nominal tidak valid." . PHP_EOL;
        }
    }

    public function infoRekening()
    {
        echo "Bank          : " . self::NAMA_BANK . PHP_EOL;
        echo "Pemilik       : {$this->namaPemilik}" . PHP_EOL;
        echo "No. Rekening  : {$this->nomorRekening}" . PHP_EOL;
        echo "Saldo Akhir   : Rp" . number_format($this->getSaldo(), 0, ',', '.') . PHP_EOL;
        echo "-------------------------------------------" . PHP_EOL;
    }
}

echo "=== IMPLEMENTASI ENCAPSULATION & CONSTANT ===" . PHP_EOL . PHP_EOL;

// Mengakses constant dari luar class menggunakan NamaClass::NAMA_CONSTANT
echo "Selamat datang di " . RekeningBank::NAMA_BANK . PHP_EOL;
echo "Biaya admin per transaksi: Rp" . number_format(RekeningBank::BIAYA_ADMIN, 0, ',', '.') . PHP_EOL . PHP_EOL;

$akun = new RekeningBank("Budi Santoso", "123-456-7890", 500000);
$akun->infoRekening();

$akun->setorTunai(250000);
$akun->tarikTunai(100000);
echo PHP_EOL;

$akun->infoRekening();

// Contoh jika mencoba mengakses property private secara langsung akan menghasilkan Error:
// echo $akun->saldo; // Fatal error: Uncaught Error: Cannot access private property