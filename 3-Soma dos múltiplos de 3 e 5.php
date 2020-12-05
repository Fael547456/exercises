<?php

class Multiplos_3_5
 {
  public $Soma;
  public function __construct($limite)
  {
   for($i=0; $i<$limite; $i++){
    if($i % 3 == 0 || $i % 5 == 0){
      $this->Soma += $i; //<-Soma o total dos múltiplos de 3 e 5
     }
    }
   }
  } 
 
   $limite = 15; //<-Limite superior de 15
   $mycalc = new Multiplos_3_5($limite); //<-Cria o objeto com a variável limite como paramêtro 
   echo "A soma dos multiplos de 3 e 5 dentro do limite de ".$limite." números é: ".$mycalc->Soma;

?> 
