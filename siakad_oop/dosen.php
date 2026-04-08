<?php
require_once 'User.php';

class Dosen extends User {
    private $nip;

    public function __construct($nama, $nip) {
        parent::__construct($nama);
        $this->nip = $nip;
    }

    public function info() {
        return "Dosen: $this->nama - NIP: $this->nip";
    }
}
?>