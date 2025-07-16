<?php

    $palabras = array("Colombia", "oscar", "tanteador");
    $caracter = "o";

    function buscarCaracter($palabras, $caracter) {
       
        for($i = 0; $i < count($palabras); $i++) {
        
            if (strpos($palabras[$i], $caracter) === false) {
                return "Las palabras NO contienen el caracter";
            }
        }
        return "Todas las palabras contienen el caracter";
    }
    
    echo buscarCaracter($palabras, $caracter);
?>