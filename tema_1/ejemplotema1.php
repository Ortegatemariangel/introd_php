<?php
    // Esto es un comentario de una línea//
    # Esto también es un comentario

    /* 
        Este es un bloque de múltiples lineas

    */

    // Variables y Constantes//
    $nombre = "Juan";
    $edad = 20; 

    echo $nombre; // Imprime: Juan

    // Constantes//
    define("PI", 3.1416);
    const SALUDO = "Hola";
    echo PI; // Imprime: 3.1416

    // Arrays y Arrays Asociativos//
    $frutas = ["Manzana", "Banana", "uva"];
    echo $frutas[0]; // Imprime: Manzana
    echo $frutas [2]; // Imprime: uva

    $persona = [
        "nombre" => "Ana",
        "edad" => 25,
        "ciudad" => "Bogotá"
    ];
    echo $persona["nombre"]; // Imprime: Ana

    // Operadores aritméticos//
    $a = 10;
    $b = 3;

    echo "Suma: " . ($a + $b) . "\n";
    echo "Resta: " . ($a - $b) . "\n";
    echo "Multiplicación: " . ($a * $b) . "\n";
    echo "División: " . ($a / $b) . "\n";
    echo "Módulo: " . ($a % $b) . "\n";

    // Operadores de asignación//
    $x = 10;

    $x += 5;  // 15
    $x -= 2;  // 13
    $x *= 3;  // 39
    $x /= 3;  // 13

    echo "Resultado final: $x";

    // Operadores de comparación//
    $a = 10;
    $b = "10";
    
    var_dump($a == $b);   // true
    var_dump($a === $b);  // false (tipo diferente)
    var_dump($a != $b);   // false
    var_dump($a > 5);     // true
    var_dump($a < 5);     // false

    // Operadores lógicos//
    $edad = 20;
    $tieneID = true;

    if ($edad >= 18 && $tieneID) {
    echo "Puede entrar";
    } else {
    echo "No puede entrar";
    }

    // incremento y decremento//
    $x = 5;

    echo $x++ . "\n"; // imprime 5, luego suma
    echo $x . "\n";   // 6

    echo ++$x . "\n"; // suma primero → 7

    echo $x-- . "\n"; // imprime 7, luego resta
    echo $x . "\n";   // 6
?>

