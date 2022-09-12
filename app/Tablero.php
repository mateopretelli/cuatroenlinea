<?php 

  namespace App

  class Tablero{

  public $row;
  public $col;
  public $var;
  public $order;
  public $rdertop;

  public $tablero = array (
  array("⚫","⚫","⚫","⚫","⚫","⚫","⚫"),
  array("⚫","⚫","⚫","⚫","⚫","⚫","⚫"),
  array("⚫","⚫","⚫","⚫","⚫","⚫","⚫"),
  array("⚫","⚫","⚫","⚫","⚫","⚫","⚫"),
  array("⚫","⚫","⚫","⚫","⚫","⚫","⚫"),
  array("⚫","⚫","⚫","⚫","⚫","⚫","⚫")
);  

  public function start(){
    for ($row = 0; $row < 8; $row++) {
      echo "\n";
    for ($col = 0; $col < 7; $col++) {
      echo $this->tablero[$row][$col];
    }
    }
}


  public function addFicha(){
    $order=0;
    $ordertop=5;
    
    while(true){
    print "Ingrese posicion: ";
    fscanf(STDIN, "%d" ,$var);
    $var = $var-1;

    if($this->tablero[$ordertop][$var] == "🔴" or $this->tablero[$ordertop][$var] == "🔵"){
      $ordertop--;
    }else{
      while($this->tablero[$ordertop][$var] == "⚫" and $ordertop<5){
        $ordertop++;
      }
    }
      
    if(fmod($order,2)==0){
    $this->tablero[$ordertop][$var] = "🔴";
    } else{
    $this->tablero[$ordertop][$var] = "🔵";
    }
  
    $this->start();
    $order++;
  }
  }
   
}

/*$Tab = new Tablero();
$Tab->start();
$Tab->addFicha();*/

?>