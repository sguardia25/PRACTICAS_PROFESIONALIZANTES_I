<?php

    /* ---INTRODUCIR CODIGO EN LA BASE DE DATOS DESDE LA INTERFAZ SQL PHPMYADMIN---
            
            1- DELIMITER $$
            2- CREATE PROCEDURE obtenerNombre()
            3- BEGIN
            4- SELECT nombre as dato FROM alumnos;
            5- END$$
            6- DELIMITER;
    
    */

    //CONEXION MYSQLI
    $servidor="localhost";
    $usuario="root";
    $password="";
    $basededatos="Practicas";

    $conexion=new mysqli($servidor,$usuario,$password,$basededatos);

    if($conexion->connect_error){
        die("ERRO DE CONEXION".$conexion->connect_error);
    }
    echo"CONEXION EXITOSA";

    //CALL PROCEDIMIENTO ALMACENADO
    $call= $conexion->query("CALL obtenerNombre()");

    while ($fila= $call->fetch_assoc()) {
        echo "DATOS: ". $fila['dato']. "<br>";
    }
     
?>
