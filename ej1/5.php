<?php

function contador ($num) {
    if (!(is_float($num))) {
        for ($i = 0; $i <= $num; $i++) {
            echo ($i * $num) . "-";
        }
    }
}

contador(6);