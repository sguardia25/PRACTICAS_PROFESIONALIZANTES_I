<?php

    //CONEXION PDO
    $servidor="localhost";
    $usuario="root";
    $password="";
    $basededatos="PracticasPDO";

    try {
        $conexion= new PDO("mysql:host=$servidor; dbname=$basededatos",$usuario,$password);
        $conexion->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

        //SELECT - WHERE - ORDER BY
        $select= $conexion->prepare("SELECT * FROM alumnos WHERE id=0 ORDER BY nombre desc"); //IMPRIMIR USUARIOS EN FORMA DESCENDENTE
        $select= $conexion->prepare("SELECT * FROM alumnos WHERE id=0 ORDER BY nombre asc"); //IMPRIMIR USUARIOS NORMALMENTE
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
