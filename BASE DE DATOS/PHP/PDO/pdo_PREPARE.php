<?php

    //CONEXION PDO
    $servidor="localhost";
    $usuario="root";
    $password="";
    $basededatos="PracticasPDO";

    try {
        $conexion= new PDO("mysql:host=$servidor; dbname=$basededatos",$usuario,$password);
        $conexion->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

        //PREPARE AGREGAR
        $prepare= $conexion->prepare("INSERT INTO alumnos(id, nombre, apellido) VALUE(NULL, :nombre, :apellido)");
        $prepare->bindParam(":nombre",$nombre);
        $prepare->bindParam(":apellido",$apellido);

        $nombre="SEBASTIAN4";
        $apellido="GUARDIA4";
        $prepare->execute();

        $nombre="SEBASTIAN5";
        $apellido="GUARDIA5";
        $prepare->execute();

         
    }catch(PDOException $error){
        echo "ERROR".$error->getMessage();
    }

?>
