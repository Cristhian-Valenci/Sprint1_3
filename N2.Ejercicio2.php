<?php 

$alumnos = [
    'Cristhian' => [8,5,9,2,5],
    'Mateo' => [4,5,6,7,2],
    'Julian' => [2,6,8,3,9],
    'Carla' => [9,7,6,8,3],
];

function promediarNotaAlumnos($alumnos) : array {

    $alumnosPromedioIndividual = [];

    foreach ($alumnos as $nombre => $notas) {
        $promedioNotas = array_sum($notas) / count($notas);
        $alumnosPromedioIndividual[$nombre] = $promedioNotas;
    }
    
    $alumnosPromedioGeneral = array_sum($alumnosPromedioIndividual) / count($alumnosPromedioIndividual);
    
    return [ 'promediosIndividuales' => $alumnosPromedioIndividual,
               'promediosDeLaClase' => $alumnosPromedioGeneral ];
}

$promedio = promediarNotaAlumnos($alumnos);

print_r($promedio);


?>