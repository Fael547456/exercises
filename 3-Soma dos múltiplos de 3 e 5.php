<?php

    $X = 3;
    $Y = 5;
    $somaX  = 0;
    $somaY  = 0;
    $somaXY = 0;
	$limite = 15;

    for($i = 1; $i < $limite; $i++) {
        if($i % $X == 0) {
            $somaX = $i + $somaX;
        }
    }
    for($i = 1; $i < $limite; $i++) {
        if($i % $Y == 0) {
            $somaY = $i + $somaY;
        }
    }
    
	$somaXY = $somaX + $somaY;
    
	echo "A soma dos multiplos de ".$X." e ".$Y." até o limite de ".$limite." numeros é: ".$somaXY;

?> 