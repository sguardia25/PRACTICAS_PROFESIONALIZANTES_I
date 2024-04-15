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

    //UPDATE
    $sql="UPDATE alumnos SET nombre='SEBAS' WHERE id=1"; //MODIFICAR USUARIO 

    if ($conexion->query($sql)===TRUE) {
        echo "ALUMNO MODIFICADO";
    } else {
        echo "NO SE PUDO MODIFICAR".$conexion->error;
    }
     
?>
