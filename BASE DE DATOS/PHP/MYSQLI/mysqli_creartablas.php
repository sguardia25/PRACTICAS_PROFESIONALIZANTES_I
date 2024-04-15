<?php

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

    //CREAR TABLAS
    $sql="CREATE TABLE alumnos(id INT(20) UNSIGNED AUTO_INCREMET PRIMARY KEY, nombre VARCHAR(255) NOT NULL, apellido VARCHAR);";

    if ($conexion->query($sql)==TRUE) {
        echo"TABLA CREADA";
    }else {
        echo"ERROR".$conexion->error;
    }
    
?>
