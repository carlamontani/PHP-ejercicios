<?php

function factorial($num){
    $result = 1;
    if($num > 1){
        for($i = 1; $i <= $num; $i++){
            $result *= $i;
        }
    }
    return $result;
}

echo factorial(4);