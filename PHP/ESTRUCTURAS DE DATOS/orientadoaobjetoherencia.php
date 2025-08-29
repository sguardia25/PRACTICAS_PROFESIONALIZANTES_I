<?php
class Animal {
    public $nombre;

    public function __construct($nombre) {
        $this->nombre = $nombre;
    }

    public function hacerSonido() {
        return "Hace un sonido genérico.";
    }
}

class Perro extends Animal {
    public function hacerSonido() {
        return "Guau guau";
    }
}

class Gato extends Animal {
    public function hacerSonido() {
        return "Miau miau";
    }
}

$perro = new Perro("Firulais");
$gato = new Gato("Michi");

echo $perro->nombre . ": " . $perro->hacerSonido() . "<br>";
echo $gato->nombre . ": " . $gato->hacerSonido() . "<br>";
?>
