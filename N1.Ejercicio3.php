<?php

    $palabras = array("Colombia", "oscar", "tanteador");
    $caracter = "o";

    function buscarCaracter( array $palabras, string $caracter) : String {
       
        foreach($palabras as $palabra) {
        
            if (strpos($palabra, $caracter) === false) {
                return "Todas las palabras NO contienen el caracter";
            }
        }
        return "Todas las palabras contienen el caracter";
    }
    
    echo buscarCaracter($palabras, $caracter);
?>