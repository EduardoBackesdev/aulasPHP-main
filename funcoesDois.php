<?php



// Looping de potencias;

function elevarPotencia($numero, $elevado){


    $resultado = $numero;

    for($k = 1; $k < $elevado; $k++){
        $resultado = $resultado * $numero;
    }

    return $resultado;


}

echo elevarPotencia(2,5);




?>