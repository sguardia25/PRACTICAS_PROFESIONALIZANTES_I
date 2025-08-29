<?php
$animales = [
    new Perro("Boby"),
    new Gato("Luna")
];

foreach ($animales as $animal) {
    echo $animal->nombre . ": " . $animal->hacerSonido() . "<br>";
}
?>