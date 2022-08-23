<?php 

namespace App

class Tablero{

	protected $gameOrder;
    protected $fichaOrder[][];
	protected $m;
	protected $n;

    //Variable para guardar la posicion de las fichas (1-7)

    protected function __construc(){

        restart();

    //Reiniciar la posicion guardada

    }

	public function addFicha(){

		if($gameOrder % 2 == 0){
			this->fichaOrder[$m][$n]="rojo"
		}
		else{
			this->fichaOrder[$m][$n]="azul"
		}

    }

    public function showBoard(){

        for ($m = 7;$m >= 0; $m--){
			for ($n = 5;$n >= 0; $n--){
				echo $fichaOrder[$m][$n]
			}
		}

    //Muestra la posicion

    }

}
?>