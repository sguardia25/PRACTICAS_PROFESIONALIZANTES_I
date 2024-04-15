?php

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

    //INSERT INTO
    $sql="INSERT INTO alumnos (id,nombre,apellido) VALUES (NULL, 'SEBASTIAN', 'GUARDIA')";

    if ($conexion->query($sql)==TRUE) {

        $nombre=$conexion->insert_id;

        echo"ALUMNO AGREGADO".$nombre;

    }else {
        echo"ERROR".$conexion->error;
    }

    $conexion->close();

    //INSERT INTO MULTI
    $sql="INSERT INTO alumnos (id,nombre,apellido) VALUES (NULL, 'SEBASTIAN', 'GUARDIA')";
    $sql="INSERT INTO alumnos (id,nombre,apellido) VALUES (NULL, 'SEBASTIAN', 'GUARDIA')";
    $sql="INSERT INTO alumnos (id,nombre,apellido) VALUES (NULL, 'SEBASTIAN', 'GUARDIA')";

    if ($conexion->multi_query($sql)==TRUE) {

        $nombre=$conexion->insert_id;

        echo"ALUMNO AGREGADO".$nombre;

    }else {
        echo"ERROR".$conexion->error;
    }

    $conexion->close();
?>
