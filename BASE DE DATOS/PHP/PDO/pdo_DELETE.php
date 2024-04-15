<?php

    //CONEXION PDO
    $servidor="localhost";
    $usuario="root";
    $password="";
    $basededatos="PracticasPDO";

    try {
        $conexion= new PDO("mysql:host=$servidor; dbname=$basededatos",$usuario,$password);
        $conexion->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

        //DELETE
        $delete= $conexion->prepare("DELETE FROM alumnos WHERE id=1");//ELIMINA ALUMNO N°1
        $delete->execute();

        echo "ALUMNO ELIMINADO";
         
    }catch(PDOException $error){
        echo "ERROR".$error->getMessage();
    }

?>
