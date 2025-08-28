<?php 

$numerosEnteros = [4,6,9,23,56,78,99];

function esPrimo($n) : bool {
    if ($n < 2) return false;

    for ($i = 2; $i <= sqrt($n); $i++) {
        if ($n % $i === 0) {
            return false;
        }
    }
    return true;
}


$numerosPrimos = array_filter($numerosEnteros, 'esPrimo');

$sumaNumerosPrimos = array_reduce($numerosPrimos, function($carry, $item) {
    return $carry + $item;
});
//array_reduce => suma los elementos del array, $carry es la suma que va sumando y $item es el siguente elemento de la array que va a sumar.

 echo $sumaNumerosPrimos;
?>