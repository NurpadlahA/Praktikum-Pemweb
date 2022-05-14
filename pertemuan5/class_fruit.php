<?php 
class Fruit{
    public $name;
    public $warna;

    public function __construct($name, $warna)
    {
        $this->name = $name;
        $this->warna = $warna;
    }
    public function intro(){
        echo "</br>Nama Aku adalah {$this->name} dan warna aku adalah {$this->warna}";
    }
}
class Strawberry extends Fruit{
    public function message(){
        echo "Aku adalah sebuah strawbery atau pisang?";
    }
}
$buah = new Strawberry("Stawberry", "merah");
$buah->message();
$buah->intro();
?>