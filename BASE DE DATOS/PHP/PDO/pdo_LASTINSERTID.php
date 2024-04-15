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

         //INSERT
         $sql="INSERT INTO alumnos(id, nombre, apellido) VALUES (NULL, 'SEBASTIAN', 'GUARDIA')";

         $conexion->exec($sql);

         //LASTINSERTID
         $id=$conexion->lastInsertId();

         echo"ALUMNO INGRESADO - ID INGRESADO: ".$id;
         
    }catch(PDOException $error){
        echo "ERROR".$error->getMessage();
    }

?>
