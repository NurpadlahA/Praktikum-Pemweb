<?php 
// memanggil file class_lingkaran
require_once 'class_lingkaran.php';
echo "Nilai PHI adalah = " . Lingkaran::PHI;
$lingkar1 = new Lingkaran(10);
$lingkar2 = new Lingkaran(4);
echo "<br/>";
// menghitung luas menggunakan fungsi getluas
echo "<br/> Luas Lingkaran I adalah = " .$lingkar1->getluas();
echo "<br/> Luas Lingkaran II adalah = " .$lingkar2->getluas();
echo "<br/>";

// mengiting keliling lingkaran mengunakan fungsi keliling
echo "<br/> Keliling lingkaran I adalah = " .$lingkar1->getkeliling();
echo "<br/> Keliling lingkaran II adalah = " .$lingkar2->getkeliling();
?>