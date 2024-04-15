<?php

    //CONEXION MYSQLI
    $servidor="localhost";
    $usuario="root";
    $password="";

    $conexion=new mysqli($servidor,$usuario,$password);

    if($conexion->connect_error){
        die("ERRO DE CONEXION".$conexion->connect_error);
    }
    echo"CONEXION EXITOSA";
?>
