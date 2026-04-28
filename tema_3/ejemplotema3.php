<?php
//🔹 Ejercicio 1: Saludo personalizado//
function saludar($nombre) {
    echo "Hola " . $nombre;
}

saludar("Joe");


// Ejercicio 2: Sumar dos números//
function sumar($a, $b) {
    return $a + $b;
}

echo sumar(4, 6);

//Ejercicio 3: Verificar edad//

function verificarEdad($edad) {
    if ($edad >= 18) {
        return "Mayor de edad";
    } else {
        return "Menor de edad";
    }
}

echo verificarEdad(17);

?>