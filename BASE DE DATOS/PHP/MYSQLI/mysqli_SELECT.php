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

    //SELECT
    $sql="SELECT * FROM alumnos";

    $select=$conexion->query($sql);

    if ($select->num_rows>0) {
        echo"HAY ALUMNOS";
        while ($fila=$select->fetch_assoc()) {
            print_r($fila);
            echo "id: ".$fila['id']. "Nombre: ".$fila['nombre']. "Apellido".$fila['apellido']. "<br>" ; //IMPRIMIR TODA LA BASE DE DATOS
        }
    } else {
        echo"NO HAY ALUMNOS";
    }
    
?>
