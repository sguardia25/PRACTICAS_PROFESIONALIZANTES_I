<?php
    $a = 5;
    $b = 10;

    //CONDICION IF
    if($a > $b){
        echo"a es mayor que b";
    }

    //CONDICION ELSE IF
    else if($a == $b){
        echo "a es igual que b";
    }

    //CONDICION ELSE
    else {
        echo "a es menor que b";
    }

    //SUICHES
    $dia = "LUNES";
    switch($dia){
        case 'LUNES':
            echo "TENGO CLASES DE PRACTICAS I - PROFE SEBASTIAN";
        break;

        case 'MARTES':
            echo "NO TENGO CLASES CON EL PROFE SEBAS - TRISTE";
        break;

        case 'MIERCOLES':
            echo "SIGO SIN CLASES CON EL PROFE SEBAS - TRISTEX2";
        break;

        default: echo "SE VIENEN LAS VACAS";
    }

    //CONDICION WHILE
    $c = 1;
    while($c <= 5){
        echo $c;
        $c++;
    }

    //CONDICION DO WHILE
    $d = 1;
    do{
        echo $d;
        $p++;
    }
    while($d <= 5);

    //CONDICION FOR
    for($i=0; $i<=5;$i++){
        echo $i;
    }
?>
