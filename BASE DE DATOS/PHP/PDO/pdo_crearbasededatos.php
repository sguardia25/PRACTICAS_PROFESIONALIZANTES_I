<?php

    //CONEXION PDO
    $servidor="localhost";
    $usuario="root";
    $password="";

    try {
        $conexion= new PDO("mysql:host=$servidor",$usuario,$password);
        $conexion->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        echo "CONEXION EXITOSA";

         //CREAR BASE DE DATOS
         $sql="CREATE DATABASE alumnos";
         $conexion->exec($sql);
         echo"BASE DE DATOS CREADA";
         
    }catch(PDOException $error){
        echo "ERROR".$error->getMessage();
    }

?>
