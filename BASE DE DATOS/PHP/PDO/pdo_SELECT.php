<?php

    //CONEXION PDO
    $servidor="localhost";
    $usuario="root";
    $password="";
    $basededatos="PracticasPDO";

    try {
        $conexion= new PDO("mysql:host=$servidor; dbname=$basededatos",$usuario,$password);
        $conexion->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

        //SELECT
        $select= $conexion->prepare("SELECT * FROM alumnos");
        $select->execute();
        $select->setFetchMode(PDO::FETCH_ASSOC);
        $resultado=($select->fetchAll());

        //MOSTRAR BASE DE DATOS COMPLETA
        foreach ($resultado as $registro) {
            echo "id: ".$registro['id']. "Nombre: ".$registro['nombre']. "Apellido:".$registro['apellido']. "<br>";
        }
         
    }catch(PDOException $error){
        echo "ERROR".$error->getMessage();
    }

?>
