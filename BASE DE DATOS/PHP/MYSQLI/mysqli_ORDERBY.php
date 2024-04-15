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

    //SELECT WHERE ORDEN BY
    $sql="SELECT * FROM alumnos WHERE id<5 order By id desc"; //IMPRIMIR BASE DE DATOS ORDENADA DESCENDENTEMTE
    $sql="SELECT * FROM alumnos WHERE id<5 order By id asc"; //IMPRIMIR BASE DE DATOS ORDENADA NORMALMENTE

    $select=$conexion->query($sql);

    if ($select->num_rows>0) {
        echo"HAY ALUMNOS";
        while ($fila=$select->fetch_assoc()) {
            print_r($fila);
            echo "id: ".$fila['id']. "Nombre: ".$fila['nombre']. "Apellido".$fila['apellido']. "<br>" ;
        }
    } else {
        echo"NO HAY ALUMNOS";
    }
    
?>
