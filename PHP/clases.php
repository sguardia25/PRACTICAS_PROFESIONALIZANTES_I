<?php
    //CLASES
    class Automovil{
        //PROPIEDAD
        public $marca;
        public $modelo;

        //METODO
        public function mostrar (){
            echo "Automovil= $this->marca, Modelo=$this->modelo";
        }
    }

    //OBJETO
    $a = new Automovil();
    $a -> marca = "TOYOTA";
    $a -> modelo = "COROLLA";
    $a -> mostrar();

    $b = new Automovil();
    $b -> marca = "FERRARI";
    $b -> modelo = "F1";
    $b -> mostrar();
?>
