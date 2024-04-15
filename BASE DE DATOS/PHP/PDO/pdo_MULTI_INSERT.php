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

         //MULTI-INSERT
        $conexion->beginTransaction(); 

        $sql="INSERT INTO alumnos(id, nombre, apellido) VALUES (NULL, 'SEBASTIAN1', 'GUARDIA1')";
        $conexion->exec($sql);

        $sql="INSERT INTO alumnos(id, nombre, apellido) VALUES (NULL, 'SEBASTIAN2', 'GUARDIA2')";
        $conexion->exec($sql);

        $sql="INSERT INTO alumnos(id, nombre, apellido) VALUES (NULL, 'SEBASTIAN3', 'GUARDIA3')";
        $conexion->exec($sql);

        $conexion->commit();

         echo"ALUMNOS INGRESADOS";
         
    }catch(PDOException $error){
        $conexion->rollBack();
        echo "ERROR".$error->getMessage();
    }

?>
