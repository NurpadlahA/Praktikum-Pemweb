<?php
class PersegiPanjang{
    public $panjang;
    public $lebar;

    function __construct($panjang, $lebar)
    {
    $this->panjang = $panjang;
    $this->lebar = $lebar;
    }

    //method untuk menghitung luas persegi panjang
    function getluas(){
        return $this->panjang * $this->lebar;
    }

    //method get keliling untuk menghitung keliling persegi panjang
    function getkeliling(){
        return $this->panjang + $this->lebar + $this->panjang + $this->lebar;
    }
}
?>