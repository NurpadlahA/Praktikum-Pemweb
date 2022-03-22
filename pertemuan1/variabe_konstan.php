<?php
// definisikan konstanta
define ('PHI', 3.14);
define ('DBNAME', 'inventori');
define ('DBSERVER', 'localhost');

$jari = 8;
$luas = PHI * $jari *$jari;
$kll = 2 * PHI * $jari;

echo 'luas lingkaran dengan jari jari' .$jari. 'adalah : $luas';
echo '<br/>keliling nya : ' .$kll;
?>
<hr/>
<?php
echo 'Nama Databsenya : ' .DBNAME;
ECHO '</br> Lokasi databasenya ada di ' .DBSERVER;
?>
