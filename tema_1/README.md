# introd_php


## Comentarios
Son notas dentro del código que el servidor ignora por completo; sirven para explicar, documentar o aclarar qué hace el programa.

Una sola línea: Se usan dos barras // o una almohadilla #.

Varias líneas: Se encierran entre /* y */.

## Variables y Constantes
Ambas sirven para guardar información, pero funcionan de forma distinta:

Variables: Son "contenedores" para datos que pueden cambiar durante la ejecución.

Siempre empiezan con el signo de peso ($)seguidodelnombre(ejemplo:‘edad = 25;`).

## Constantes
Son valores fijos que NO pueden modificarse ni eliminarse una vez definidos. 
Se crean usando la función define() o la palabra clave const, y a diferencia de las variables, no llevan el signo $ antes de su nombre.

## Arrays y Arrays Asociativos
Un array permite almacenar múltiples valores en una sola variable, funcionando como una lista potente.

Arrays (Indexados): Los datos se organizan por posiciones numéricas (índices), que automáticamente empiezan desde el 0.
Por ejemplo, en una lista de frutas, la primera sería la posición 0, la segunda la 1, y así sucesivamente.

Arrays Asociativos: En lugar de usar números, utilizas nombres o "claves" personalizadas para guardar y encontrar los datos.

Se escriben en formato clave → valor (ejemplo: "nombre" => "Ana"). 

Son ideales cuando quieres asociar etiquetas con significado a los valores, como los detalles de un usuario.

## ¿Qué son los operadores?

Los operadores son símbolos que permiten trabajar con datos en PHP.

Se usan para:

Hacer cálculos
Guardar valores
Comparar datos
Tomar decisiones

1. Operadores aritméticos

Sirven para hacer operaciones matemáticas básicas.

Incluyen:

- Suma +
- Resta -
- Multiplicación *
- División /
- Módulo % (residuo)

2. Operadores de asignación

Se usan para asignar valores a variables.

Tipos comunes:

= asignación simple
+=, -=, *=, /= combinación con operación

3. Operadores de comparación

Comparan valores y devuelven true o false.

Importantes:

== igual
=== idéntico (valor y tipo)
!= diferente
> < >= <=

4. Operadores lógicos

Se usan para combinar condiciones.

Tipos:

&& (AND) → ambas deben ser true
|| (OR) → una debe ser true
! (NOT) → invierte el valor

5. Incremento y decremento

Sirven para aumentar o disminuir en 1.

Tipos:

$x++ (después)
++$x (antes)
$x--
--$x

![Consulta](IntroduccionPhp_tema1.png "Consulta ")