<?php

function treinta($num1, $num2){
    if (!(is_float($num1) || is_float($num2))) {
        if ($num1 == 30 || $num2 == 30){
            return true;
        } else if ( $num1 + $num2 >= 30) {
            return true;
        }
    }
}

$resultado = treinta(2, 66);

var_dump($resultado);