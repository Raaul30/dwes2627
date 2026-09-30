<?php

// Asigna el valor nula a la variable
//$var = 1;
// Cuando la variable no haya sido definida

// Cuando esté definida sin un valor asignado
// Cuando la variable se ha eliminado con unset()

$var = 23;
unset($var);

if (is_null($var)) {
    echo "La variable es nula<br>";
} else {
    echo "La variable no es nula<br>";
}