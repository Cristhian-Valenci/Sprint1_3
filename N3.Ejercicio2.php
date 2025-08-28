<?php 

$nombres = ['jose', 'maria', 'pepe', 'julian', 'ramona'];

function filtrarNombres($nombres) : bool {
    return strlen($nombres) % 2 === 0;
}

$nombresPares = array_filter($nombres, 'filtrarNombres');

print_r($nombresPares);

?>