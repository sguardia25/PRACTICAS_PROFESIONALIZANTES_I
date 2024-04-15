<?php

    //CONEXION MYSQLI
    $servidor="localhost";
    $usuario="root";
    $password="";
    $basededatos="Practicas";

    $conexion=new mysqli($servidor,$usuario,$password,$basededatos);

    if($conexion->connect_error){
        die("ERRO DE CONEXION".$conexion->connect_error);
    }
    echo"CONEXION EXITOSA";

    //DELETE
    $sql="DELETE * FROM alumnos WHERE id=3"; //BORRAR USUARIO 

    if ($conexion->query($sql)===TRUE) {
        echo "ALUMNOS BORRADO";
    } else {
        echo "ALUMNO NO BORRADO".$conexion->error;
    }
    
?>
