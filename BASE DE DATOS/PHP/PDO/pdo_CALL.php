<?php

    /* ---INTRODUCIR CODIGO EN LA BASE DE DATOS DESDE LA INTERFAZ SQL PHPMYADMIN---
            
            1- DELIMITER $$
            2- CREATE PROCEDURE obtenerNombre()
            3- BEGIN
            4- SELECT nombre as dato FROM alumnos;
            5- END$$
            6- DELIMITER;
    
    */

    //CONEXION PDO
    $servidor="localhost";
    $usuario="root";
    $password="";
    $basededatos="PracticasPDO";

    try {
        $conexion= new PDO("mysql:host=$servidor; dbname=$basededatos",$usuario,$password);
        $conexion->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

        //CALL PROCEDIMIENTO ALMACENADO
        $call= $conexion->prepare("XALL obtenerNombre()");
        $call->execute();

        $resultado=($call->fetchAll());
        
        print_r($resultado);
         
    }catch(PDOException $error){
        echo "ERROR".$error->getMessage();
    }

?>
