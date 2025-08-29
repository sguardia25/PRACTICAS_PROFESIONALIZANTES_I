<?php
class Persona {
    public $nombre;
    public $edad;

    public function __construct($nombre, $edad) {
        $this->nombre = $nombre;
        $this->edad = $edad;
    }

    public function presentarse() {
        return "Hola, me llamo " . $this->nombre . " y tengo " . $this->edad . " años.";
    }
}

$persona1 = new Persona("Juan", 25);
$persona2 = new Persona("Ana", 30);

echo $persona1->presentarse() . "<br>";
echo $persona2->presentarse() . "<br>";
?>
