<?php

// Ejercicio 3: Mostrar las dos primeras letras de los dias de la semana, usando for y un array asociativo.
$dias = [
    "lunes" => "lu",
    "martes" => "ma",
    "miércoles" => "mi",
    "jueves" => "ju",
    "viernes" => "vi",
    "sábado" => "sa",
    "domingo" => "do"
];

for ($i = 0; $i < count($dias); $i++) {
    echo array_values($dias)[$i] . "<br>";
}

?>