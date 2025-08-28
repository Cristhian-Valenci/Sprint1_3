<?php 

$array1 = [3,5,18,22,24.5];
$array2 = [4.3,8,19,22,28];

$numeroRepetido = [];
$arraysJuntos = array_merge($array1, $array2);

foreach ($array1 as $numero) {
    if (in_array($numero, $array2)) {
        $numeroRepetido[] = $numero;
    }
}


print_r($numeroRepetido);
print_r($arraysJuntos);

?>