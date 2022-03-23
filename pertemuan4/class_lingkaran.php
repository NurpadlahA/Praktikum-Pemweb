<?php 
// membuat clasas lingkaran
class Lingkaran{
    // buat property
    private $jari;
    const PHI = 3.14;

    // method
    function __construct($r)
    {
        $this->jari = $r;
    }
    // buat method untuk menghitung luas lingaran
    function getluas(){
        return self::PHI * $this->jari * $this->jari;
    }

    // buat method get keliling untuk menghitung keliling lingkaran
    function getkeliling(){
        return 2 * self::PHI * $this->jari;
    }
}

?>