<?php

    $palabras = array("Colombia", "oscar", "tanteador");
    $caracter = "o";

    function buscarCaracter($palabras, $caracter) {
       
        foreach($palabras as $palabra) {
        
            if (strpos($palabra, $caracter) === false) {
                return "Las palabras NO contienen el caracter";
            }
        }
        return "Todas las palabras contienen el caracter";
    }
    
    echo buscarCaracter($palabras, $caracter);
?>