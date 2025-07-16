<?php
/*$X = array (10, 20, 30, 40, 50,60);
Mostrar por pantalla el tamaño del array anterior y posteriormente elimina un elemento del array anterior. 
Después de eliminar el elemento, las claves enteras deben ser normalizadas (se deben reorganizar sus índices).
 Muestra por última vez el tamaño del array.*/ 

     $X = array (10, 20, 30, 40, 50,60);
     echo count($X) . "<br>";
     unset($X[1]); 
     $X = array_values($X); // Con esto reorganizo los indices del array
     echo count($X) . "<br>";

?>