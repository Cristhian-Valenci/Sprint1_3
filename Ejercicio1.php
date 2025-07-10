<?php
/*Crea un array, añádele 5 números enteros y luego muestrales por pantalla de uno en uno */
    
    $numeros = array(1, 2, 3, 4, 5);
    //$numeros = [1, 2, 3, 4, 5]; tambien se puede con la sintaxis de matriz corta

    for($i = 0; $i < count($numeros); $i++) {
        echo $numeros[$i] . ",";
    }


?>
