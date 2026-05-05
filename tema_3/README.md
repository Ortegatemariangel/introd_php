# introd_php

## ¿Qué es una función en PHP?

Una función en PHP es un bloque de código que se crea para hacer una tarea específica y que puedes usar muchas veces sin repetir código.

Piensa en una función como una mini máquina:

Recibe datos (parámetros)
Hace algo (proceso)
Devuelve un resultado (return)

### ¿Para qué sirven?
1. Organizar mejor tu código
2. Evitar repetir lo mismo muchas veces
3. Hacer programas más claros
4. Facilitar el mantenimiento

### Ciclo de vida de una funcion

1. Se declara (PHP la guarda)
2. Se llama (se ejecuta)
3. Procesa datos
4. Devuelve resultado

## Estructura basica
```php
function saludar($nombre) {
    return "Hola " . $nombre;
}
```

### Ejemplo

``` <?php
//🔹Ejercicio 1: Saludo personalizado//
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
```

![Consulta](geminifunciones.png "Consulta ")
