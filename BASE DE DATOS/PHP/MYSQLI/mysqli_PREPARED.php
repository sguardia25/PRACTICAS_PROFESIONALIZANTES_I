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

    //PREPARED
    $prepared= $conexion->prepare("INSERT INTO alumnos(id, nombre, apellido) VALUE (NULL, ?, ?)");

    $prepared->bind_param("ss", $nombre, $apellido);

    $nombre="SEBASTIAN2";
    $apellido="GUARDIA2";
    $prepared->execute();


    $conexion->close();
?>
