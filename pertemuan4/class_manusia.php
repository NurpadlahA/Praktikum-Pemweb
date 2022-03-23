<?php
// membuat mnausia
class Manusia{
    // Buat properti
    var $nama;
    var $warna;

    // Buatlah method atau function
    function tampilkan_nama(){
        return 'Nama Saya Nurpadlah Apipah';
    }
    function warna_kulit(){
        return '<br/>Kulit Saya berwarna sawo matang';
    }
}
// buat objek
$manusia = new Manusia();

echo $manusia -> tampilkan_nama();
echo $manusia -> warna_kulit();

?>