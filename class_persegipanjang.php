<?php
// Membuat Class Persegi Panjang
class PersegiPanjang{
    // Buat property
    private $panjang;
    private $lebar;

    // Method
    public function __construct($panjang, $lebar)
    {
        $this->_panjang = $panjang;
        $this->_lebar = $lebar;
    }
    // Buat method getluas untuk menghitung luas persegi panjang
    public function getluas(){
        return $this->_panjang * $this->_lebar;
    }

    // Buat method getluas untuk menghitung keliling persegi panjang
    public function getkeliling(){
        return 2 * ($this->_panjang + $this->_lebar );
    }
}
// Tutup class
?>