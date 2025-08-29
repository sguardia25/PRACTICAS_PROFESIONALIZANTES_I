<?php
$frutas = ["Manzana", "Banana", "Naranja", "Pera"];

echo "La primera fruta es: " . $frutas[0] . "<br>";

echo "Listado de frutas:<br>";
foreach ($frutas as $fruta) {
    echo "- " . $fruta . "<br>";
}
?>