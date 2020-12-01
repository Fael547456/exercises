<?php
$numeros = array(7, 3 , 9, 4 , 1 , 2, 5, 8 , 0, 6);
$array_total = count($numeros);

echo "Numeros ANTES do Bubble Sort: ";
for ( $i = 0; $i < $array_total; $i++ )
   echo $numeros[$i].", ";

for ( $i = 0; $i < $array_total; $i++ )
{
   for ($j = 0; $j < $array_total; $j++ )
   {
      if ($numeros[$i] < $numeros[$j])
      {
         $memoria = $numeros[$i];
         $numeros[$i] = $numeros[$j];
         $numeros[$j] = $memoria;
      }
   }
}

echo '<br>';
echo '<br>';
echo " Numeros DEPOIS do Bubble Sort: ";
for( $i = 0; $i < $array_total; $i++ )
   echo $numeros[$i].", ";

?> 