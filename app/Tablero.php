<?php 

namespace App

class Tablero{

    protected $fichaOrder;

    //Variable para guardar la posicion de las fichas (1-7)

    protected function __construc(){

        restart();

    //Reiniciar la posicion guardada

    }

    public function showBoard(){

        echo $fichaOrder;

    //Muestra la posicion

    }

    public function addFicha(){

    }

}
?>