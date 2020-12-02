<?php

/*

1. Pegua a variável inteira A, B, C
2. Define A = 1, B = 1
3. MOSTRA A, B
4. C = A + B
5. MOSTRA C
6. Define A = B, B = C
7. REPETE de 4 - 6, por N vezes

     (Fn = Fn-1 + Fn-2)
*/
class Fibonacci{
     
     public $N = 20; // Numero de vezes
     public $A = 1;
     public $B = 1;
    
public function FiboCalc()
  {
	for($i = 1; $i <= $this->N-2; $i++) {
         $C = $this->A + $this->B;
         echo $C.", ";
         $this->A = $this->B;
         $this->B = $C;
      }
  }
} 

$mycalc = new Fibonacci();
echo "Sequência Fibonacci: ",$mycalc->FiboCalc();



?>
