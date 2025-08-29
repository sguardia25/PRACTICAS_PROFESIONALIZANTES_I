<?php
    //VARIABLE NUMERICA
    $numero= 5;
    echo "Esto es una variable numerica= $numero";

    //VARIABLE TEXTO
    $palabra= 'palabra';
    echo "Esto es una variable texto= $palabra";

    //VARIABLE BOOLEANA
    $booleana= true;
    echo "Esto es una variable booleana= $booleana";

    //VARIABLE ARREGLO
    $arreglo= array("rojo","amarrillo", "azul");
    echo "Esto es una variable array= $arreglo[0]";

    //VARIABLE ARREGLO CON PROPIEDADES
    $arreglo2= array ("propiedad1"=>"rojo", "propiedad2"=>"amarillo", "propiedad3"=>"azul");
    echo "Esto es una variable array-propiedad = $arreglo2[propiedad1]";
    
    //VARIABLE OBJETO
    $objeto= (object)["objeto1"=>"rojo", "objeto2"=>"amarillo", "objeto3"=>"azul"];
    echo "Esto es una variable objeto = $objeto->objeto1";
 
    //SALIDA VARDUMP
    $numero= 10;
    var_dump($numero);
?>
