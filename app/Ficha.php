<?php 

namespace App

class Ficha{
    protected $colour;

    //Variable donde se almacena el color de la ficha

    protected function __construct($saveColour)
        $this->colour = $saveColour;

    //Se guarda el color de la ficha

    public function showColour(){
        echo $colour;
    }

    //Se muestra ->
}

?>