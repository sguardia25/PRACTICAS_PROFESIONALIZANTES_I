?php

    //CONEXION MYSQLI
    $servidor="localhost";
    $usuario="root";
    $password="";
    $basededatos="Practicas";
    
    $conexion=new mysqli($servidor,$usuario,$password,$basededatos);

    //METHOD POST AGREGAR
    if ($_POST) {
        print_r($_POST);
        $nombre=$_POST['nombre'];
        $apellido=$_POST['apellido'];
        $post=$conexion->prepare("INSERT INTO alumnos(id, nombre, apellido) VALUES (NULL, ?, ?)");
        $post->bind_param("s",$nombre, $apellido);
        $post->execute();
        
        echo "ALUMNO AGREGADO";
    }

    //METHOD GET BORRAR
    if ($_GET) {
        $id=$_GET['id'];
        $borrar=$conexion->prepare("DELETE FROM alumnos WHERE id=?");
        $borrar->bind_param("s",$id);
        $borrar->execute();

        echo "ALUMNO ELIMINADO";
    }

     //METHOD POST SELECCIONAR
    $sql="SELECT * FROM alumnos order By id asc";
    $select=$conexion->query($sql);
    $datos=$select->fetch_all();

?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>MYSQLI</title>
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
                    <th>#</th>
                    <th>Tarea</th>
                    <th>Acción</th>
                </tr>
            </thead>
            <?php foreach ($datos as $dato) { //ELIMINAR USUARIO
            ?>
                <tr>
                    <td><?php echo $dato[0]; ?></td>
                    <td><?php echo $dato[1]; ?></td>
                    <td><a href="?id=<?php echo $dato[0];?>">[Borrar]</a></td>
                </tr>
            <?php } ?>
        </table>
    </body>
</html>
