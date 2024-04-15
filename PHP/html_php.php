<!DOCTYPE html>
<html lang="es">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>HTML/PHP</title>
    </head>

    <body>
        <h1>HTML CON PHP</h1>
        <?php
            //IMPRIMIR
            echo "HOLA MUNDO";
        ?>
        <?php
            //VARIABLES
            $numero= 5;
            echo "El numero es= $numero";

            $palabra= 'PRACTICAS';
            echo "La palabra es= $palabra";

            $vector= array ("1 2 3 4 5 6 7 8 9","1 2 3 4 5 6");
            echo "El vector es= $vector[1]";
        ?>
        <?php
            //FUNCIONES
            function php ($retorno){
                return ($retorno);
            }
            echo php("PRACTICAS LA MEJOR MATERIA"); 
        ?>
        <?php
            //CONDIONES
            $n1= 10;
            $n2= 10;

            if ($n1/=0 && $n2/=0){
                $suma=$n1+$n2;
            }
            echo "La Sumas es= $suma";
        ?>
    </body>
</html>
