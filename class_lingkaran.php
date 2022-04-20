

<?php
// Membuat class lingkaran
class Lingkaran{
    // Buat property
    private $jari;
    const PHI = 3.14;

    // Method
    function __construct($r)
    {
        $this->jari = $r;    
    }

    // Buat method getluas untuk menghitung luas lingkaran
    function getluas(){
        return self::PHI * $this->jari * $this->jari;    
    }

    // Buat method getkeliling untuk menghitung keliling lingkaran
    function getkeliling(){
        return 2 * self::PHI * $this->jari;
    }
}
// Tutup class
?>