<?php

ini_set('display_error', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);


/*$stock = 800;
if ($stock > 0){
    echo "hay stock";
    } else { echo "No hay stock";
    }

?>
*/



$valor = rand(1,5);
    if ($valor == 1 || $valor == 3 || $valor == 5) {
        echo"el numero $valor es impar";
    } else {
        echo "el numero $valor es par";
    }
    print_r($valor);
