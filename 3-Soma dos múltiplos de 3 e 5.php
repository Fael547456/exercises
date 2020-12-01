<?php

    $X = 3;
    $Y = 5;
    $somaX  = 0;
    $somaY  = 0;
    $somaXY = 0;
	$limite = 1000;

    for($i = 1; $i < $limite; $i++) {
        if($i % $X == 0) {
            $somaX = $i + 1;
        }
    }
    for($i = 1; $i < $limite; $i++) {
        if($i % $Y == 0) {
            $somaY = $i + 1;
        }
    }
    
	$somaXY = $somaX + $somaY;
    
	echo "A soma dos multiplos de ".$X." e ".$Y." é: ".$somaXY;

?> 