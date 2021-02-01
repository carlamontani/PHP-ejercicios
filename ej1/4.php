<?php

function animales($i){
    switch ($i) {
        case "perro":
            echo ucfirst($i) . " = Perruno";
            break;
        case "gato":
            echo ucfirst($i) . " = Felino";
            break;
        case "caballo":
            echo ucfirst($i) . " = Salvaje";
            break;
        case "pez":
            echo ucfirst($i) . " = Acuatico";
            break;
        default:
            echo "Cualquier otro = No aplica";
    }
}

echo animales("pecesito");