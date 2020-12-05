<?php

class Bubble_Sort{
  
  public function __construct($numeros)
  {
   $array_total = count($numeros);	  
   $l = 0; //<-Valiável contadora de numeros de vezes de ordenação  
   for ( $i = 0; $i < $array_total; $i++ )
    {
     for ($j = 0; $j < $array_total; $j++ )
     {
      if ($numeros[$i] < $numeros[$j])
       {
        $memoria = $numeros[$i];
        $numeros[$i] = $numeros[$j];
        $numeros[$j] = $memoria;
        $l= $l + 1; //<-Conta quantas vezes passsou pelo vetor;
       }
      }
     }
     echo "Números depois do Bubble Sort: ";
     for( $i = 0; $i < $array_total; $i++ ) echo $numeros[$i]."  ";
     echo "<br>";
     echo "Quantidade de vezes que foi ordenado: ".$l;
    }
  }

$numeros = array(7, 3 , 9, 4 , 1 , 2, 5, 8 , 0, 6);//<-Vetor a ser ordenado por Bubble Sort
$mycalc = new Bubble_Sort($numeros);



?> 
