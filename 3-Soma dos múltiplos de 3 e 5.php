<?php

class Multiplos_3_5
{
  public $somaXY;
  
  public function __construct($limite)
  {
   $somaX = 0;
   $somaY = 0; 
   for($i = 1; $i < $limite; $i++) {
        if($i % 3 == 0) { 
           $somaX = $i + $somaX; //<-Soma multiplos de 3
        }
      }
	
   for($i = 1; $i < $limite; $i++) {
        if($i % 5 == 0) {
            $somaY = $i + $somaY; //<-Soma multiplos de 5
        }
      }	
	 
	  $this->somaXY = $somaX + $somaY; //<-Soma o total dos multiplos de 3 e 5
   }
}
 
   $lim = 15; //<-Limite superior de 15
   $mycalc = new Multiplos_3_5($lim); //<-Cria o objeto com a variavel limite como paramêtro 
   echo "A soma dos multiplos de 3 e 5 dentro do limite de ".$lim." numeros é: ".$mycalc->somaXY;

?> 
