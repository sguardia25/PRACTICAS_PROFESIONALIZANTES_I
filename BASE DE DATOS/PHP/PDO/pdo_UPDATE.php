<?php

    //CONEXION PDO
    $servidor="localhost";
    $usuario="root";
    $password="";
    $basededatos="PracticasPDO";

    try {
        $conexion= new PDO("mysql:host=$servidor; dbname=$basededatos",$usuario,$password);
        $conexion->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

        //UPDATE
        $update= $conexion->prepare("UPDATE alumnos SET nombre='NICOLAS' WHERE id=2");//MODIFICAR ALUMNO N°2
        $update->execute();

        echo "ALUMNO MODIFICADO";
         
    }catch(PDOException $error){
        echo "ERROR".$error->getMessage();
    }

?>
