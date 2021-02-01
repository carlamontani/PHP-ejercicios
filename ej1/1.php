<?php

function sum ($num1, $num2){
    if ($num1 === $num2) {
        return ($num1 + $num2)*3;
    } else {
        return $num1 + $num2;
    }
}

$resultado = sum(4, 2);

echo $resultado;