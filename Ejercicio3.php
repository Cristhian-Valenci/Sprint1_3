<?php

    $palabras = array("Hola", "España", "Agua");
    $caracter = "a";

    function buscarCaracter($palabras, $caracter) {
        foreach ($palabras as $palabra) {
            if (strpos($palabra, $caracter) !== false) { //strpos() busca la posicion de un caracter en un String sin importar may o min
                return "El caracter se encuentra en las palabras";;
            } 
            }
            return "El caracter NO se encuentra en ninguna palabraa"; 
        
    }

    echo buscarCaracter($palabras, $caracter);

    
?>