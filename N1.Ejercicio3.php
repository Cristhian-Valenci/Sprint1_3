<?php

    $palabras = array("Colombia", "oscar", "tanteador");
    $caracter = "o";

    function buscarCaracter( array $palabras, string $caracter) : bool {
       
        foreach($palabras as $palabra) {
        
            if (strpos($palabra, $caracter) === false) {
                return false;
            }
        }
        return true;
    }
    
    if (buscarCaracter($palabras, $caracter)) {
        echo "Todas las palabras contienen el caracter";
    } else {
        echo "Todas las palabras NO contienen el caracter";
    }
?>