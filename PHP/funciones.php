<?php
    //FUNCION SIN PARAMETRO
    function imprimir(){
        echo"HOLA MUNDO";
    }
    imprimir();

    //FUNCION CON PARAMETRO
    function imprimir1($saludo){
        echo $saludo;
    }
    imprimir1("HOLA MUNDO SALUDO");

    //FUNCION CON RETORNO
    function imprimir2($retorno){
        return $retorno;
    }
    echo imprimir2("HOLA MUNDO RETORNO");
?>
