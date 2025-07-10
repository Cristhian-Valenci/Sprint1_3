<?php

    $palabras = array("Hola", "España", "Agua");
    $caracter = "a";

    function buscarCaracter($palabras, $caracter) {
        foreach ($palabras as $palabra) {
            if (strpos($palabra, $caracter) !== false) { //strpos() busca la posicion de un caracter en un String sin importar may o min
                return true;
            } else {
                return false;
            }
        }
    }

    
?>