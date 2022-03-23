<?php 
// memanggil file class_persegipanjang
require_once 'class_persegipanjang.php';
$persegi1 = new PersegiPanjang(5,10);
$persegi2 = new PersegiPanjang(10,20);
echo "<br/>";
// menghitung luas Persegi Panjang fungsi getluas
echo "<br/> Luas Persegi Panjang I adalah = " .$persegi1->getluas();
echo "<br/> Luas Persegi Panjang II adalah = " .$persegi2->getluas();
echo "<br/>";

// mengiting keliling Persegi Panjang mengunakan fungsi keliling
echo "<br/> Keliling Persegi panjang I adalah = " .$persegi1->getkeliling();
echo "<br/> Keliling Persegi Panjang II adalah = " .$persegi2->getkeliling();
?>