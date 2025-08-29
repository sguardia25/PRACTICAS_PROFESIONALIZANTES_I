<?php
$personas = [
    ["Juan", 20, "Argentina"],
    ["Ana", 22, "Chile"],
    ["Pedro", 19, "Uruguay"]
];

echo "La primera persona es: " . $personas[0][0] . "<br>"; 

echo "Listado de personas:<br>";
foreach ($personas as $fila) {
    echo "Nombre: " . $fila[0] . " | Edad: " . $fila[1] . " | País: " . $fila[2] . "<br>";
}
?>
