<?php

    //CONEXION PDO
    $servidor="localhost";
    $usuario="root";
    $password="";
    $basededatos="PracticasPDO";

    try {
        $conexion= new PDO("mysql:host=$servidor; dbname=$basededatos",$usuario,$password);
        $conexion->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

        //SELECT - WHERE
        $select= $conexion->prepare("SELECT * FROM alumnos WHERE apellido='GUARDIA'"); //MOSTRAR DATOS SOLO DE UN USUARIO
        $select->execute();
        $select->setFetchMode(PDO::FETCH_ASSOC);
        $resultado=($select->fetchAll());

        foreach ($resultado as $registro) {
            echo "id: ".$registro['id']. "Nombre: ".$registro['nombre']. "Apellido:".$registro['apellido']. "<br>";
        }
         
    }catch(PDOException $error){
        echo "ERROR".$error->getMessage();
    }

?>
