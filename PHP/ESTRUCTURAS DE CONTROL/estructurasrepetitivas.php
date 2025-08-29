<?php
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

    //FOREACH
    $frutas = array("Manzana", "Banana", "Naranja");

    foreach ($frutas as $fruta) {
        echo "Fruta: $fruta <br>";
    }
?>