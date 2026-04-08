<?php
require_once 'User.php';
require_once 'CetakLaporan.php';

class Mahasiswa extends User implements CetakLaporan {
    private $nim;
    private $nilai = [];

    public function __construct($nama, $nim) {
        parent::__construct($nama);
        $this->nim = $nim;
    }

    public function tambahNilai($nilai) {
        $this->nilai[] = $nilai;
    }

    public function hitungIPK() {
        $total = array_sum($this->nilai);
        return count($this->nilai) > 0 ? $total / count($this->nilai) : 0;
    }

    public function info() {
        return "Mahasiswa: $this->nama - NIM: $this->nim";
    }

    public function cetak() {
        return "KHS Mahasiswa: $this->nama | IPK: " . $this->hitungIPK();
    }
}
?>