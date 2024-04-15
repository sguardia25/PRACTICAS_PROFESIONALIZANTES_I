<?php

    //CONEXION PDO
    $servidor="localhost";
    $usuario="root";
    $password="";
    $basededatos="PracticasPDO";

    $conexion= new PDO("mysql:host=$servidor;dbname=$basededatos", $usuario, $password);
    $conexion->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    if ($_POST) { //AGREGAR

        $sql=$conexion->prepare("INSERT INTO alumnos(id, nombre, apellido) VALUES (NULL, :nombre, :apellido)");
        $sql->bindParam(':alumno', $alumno);
        $nombre=$_POST['nombre'];
        $sql->bindParam(':apellido', $apellido);
        $apellido=$_POST['apellido'];
        $sql->execute();

        echo "ALUMNO AGREGADO";
        header('Location:?'); //PARA NO REDIRECCIONAR Y AGREGAR MUCHAS VECES EL MISMO USUARIO
    }

    if ($_GET) { //BORRAR
        
        $sql=$conexion->prepare("DELETE FROM alumno WHERE id=:id");
        $sql->bindParam(':id', $id);
        $nombre=$_GET['id'];
        $sql->execute();

        echo "ALUMNO ELIMINADO";
        header('Location:?'); //PARA NO REDIRECCIONAR Y AGREGAR MUCHAS VECES EL MISMO USUARIO
    }

    $sql=$conexion->prepare("SELECT * FROM alumnos");
    $sql->execute();
    $resultado=$sql->setFetchMode(PDO::FETCH_ASSOC);
    $datos=$sql->fetchAll();

?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>PDO</title>
    </head>
    <body>
        <h1>INGRESAR ALUMNO</h1>
        <form action="" method="POST"><!--METHOD POST AGREGAR-->
            NOMBRE:
            <input type="text" name="alumno" id="alumno">
            <br>
            APELLIDO:
            <input type="text" name="apellido" id="apellido">
            <br>
            <input type="submit" value="Agregar">
        </form>

        <table>
            <thead>
                <tr>
                    <th>ID</th>
                    <th>NOMBRE</th>
                    <th>APELLIDO</th>
                    <th>BORRAR</th>
                </tr>
            </thead>
            <?php foreach ($datos as $dato) { //ELIMINAR USUARIO
            ?>
                <tr>
                    <td><?php echo $dato['id']; ?></td>
                    <td><?php echo $dato['nombre']; ?></td>
                    <td><?php echo $dato['apellido']; ?></td>
                    <td><a href="?id=<?php echo $dato['id'];?>">[Borrar]</a></td>
                </tr>
            <?php } ?>
        </table>
    </body>
</html>
