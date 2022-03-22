<?php
$ar_buah = ["pepaya", "mangga", "pisang", "jambu"];
echo "$ar_buah[2]" ;
echo "<br/>Jumlah buah : " .count($ar_buah);
echo "<ol>";
foreach ($ar_buah as $buah) {
    echo "<li>$buah</li>";
}
echo "<ol>";
// tambahkan bauh
$ar_buah[] = "Durian";
// hapus buah
unset($ar_buah[1]);
// mengubah buah
$ar_buah[2] = "manggis";
// 
echo '<ul>';
foreach ($ar_buah as $k => $v){
    echo "<li> buah index ke - $k adalah $v </li>";
}
echo "</ul>";
?>