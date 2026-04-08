<?php
class Nilai {
    private $nilai;

    public function __construct($nilai) {
        $this->nilai = $nilai;
    }

    public function getNilai() {
        return $this->nilai;
    }
}
?>