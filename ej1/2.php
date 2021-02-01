<?php

function diferencia($num1, $num2){
    if (!(is_float($num1) || is_float($num2))) {
        $totalDiferencia = $num1 - $num2;
        if ($totalDiferencia % 2 == 0){
            echo "es par";
        } else {
            echo 'es impar';
        }
    }
}

$resultado = diferencia(2 ,2);
echo $resultado;