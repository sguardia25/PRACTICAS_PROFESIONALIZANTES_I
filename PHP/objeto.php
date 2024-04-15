<?php
    //CODIGO IMPERATIVO
    $automovil1= (object)["marca"=>"toyota", "modelo"=>"corsa"];
    $automovil2= (object)["marca"=>"ferrari", "modelo"=>"f5"];

    function mostrar($automovil){
        echo "Automovil= $automovil->marca, Modelo= $automovil->modelo";
    }
    mostrar($automovil1);
    mostrar($automovil2);
?>
