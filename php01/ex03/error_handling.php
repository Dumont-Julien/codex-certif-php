<?php
declare(strict_types=1);

function division(int|float $a, int|float $b) : int|float|string {
    try {
        return $a / $b;
    }catch (DivisionByZeroError){
        return 'Impossible de diviser par zéro !';
    }
}

if(is_numeric($argv[1]) && is_numeric($argv[2])) {
    echo division((int)$argv[1], (int)$argv[2]);
}else{
    echo 'Valeur non numérique...';
}