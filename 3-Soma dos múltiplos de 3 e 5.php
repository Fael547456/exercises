<?php

class Multiplos_3_5
{
  public $X = 3;
  public $Y = 5;
  public $somaX;
  public $somaY;
  public $somaXY;
  
  public function __construct($limite)
  {
   for($i = 1; $i < $limite; $i++) {
        if($i % $this->X == 0) {
            $this->somaX = $i + $this->somaX;
        }
      }
	
   for($i = 1; $i < $limite; $i++) {
        if($i % $this->Y == 0) {
            $this->somaY = $i + $this->somaY;
        }
      }	
	 
	  $this->somaXY = $this->somaX + $this->somaY;
   }
}
 
   $lim = 15; //<-Limite superior de 15
   $mycalc = new Multiplos_3_5($lim); //<-Cria o objeto com a variável limite como paramêtro 
   echo "A soma dos multiplos de 3 e 5 dentro do limite de ".$lim." números é: ".$mycalc->somaXY;

?> 
