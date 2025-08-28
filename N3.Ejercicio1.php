<?php 

$numerosEnteros = [2,6,9,12,56,78];

function elevarAlCubo($num) : int {
   $total = $num * $num * $num;
   return $total;
}

$arrayAlCubo = array_map('elevarAlCubo', $numerosEnteros);

print_r($arrayAlCubo);


?>