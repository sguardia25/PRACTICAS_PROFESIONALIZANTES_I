<?php

    //CONEXION PDO
    $servidor="localhost";
    $usuario="root";
    $password="";
    $basededatos="PracticasPDO";

    try {
        $conexion= new PDO("mysql:host=$servidor; dbname=$basededatos",$usuario,$password);
        $conexion->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        echo "CONEXION EXITOSA";

         //CREAR TABLAS
         $sql="CREATE TABLE alumnos (id INT(15) UNSIGNED AUTO_INCREMENT PRIMARY KEY, nombre VARCHAR(255) NOT NULL, apellido VARCHAR(255) NOT NULL)";

         $conexion->exec($sql);
         echo"TABLA CREADA";
         
    }catch(PDOException $error){
        echo "ERROR".$error->getMessage();
    }

?>
