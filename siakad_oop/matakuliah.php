<?php
class MataKuliah {
    private $namaMK;
    private $sks;

    public function __construct($namaMK, $sks) {
        $this->namaMK = $namaMK;
        $this->sks = $sks;
    }

    public function getInfo() {
        return "$this->namaMK ($this->sks SKS)";
    }
}
?>