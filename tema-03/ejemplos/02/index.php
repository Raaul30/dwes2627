<?php

/*
    Ejemplo 3.2 if, else, elseif y operador ternario
    Descripción: Determinar el item de calificación de un examen

    La calificación será:
        - suspenso
        - suficiente
        - bien
        - notable
        - sobresaliente

*/

$nota = 7;

if ($nota < 0){
    echo "Error: la nota tiene que estar entre 0 y 10";
}elseif ($nota < 5) {
    echo "Suspenso";
} elseif ($nota < 6) {
    echo "Suficiente";
} elseif ($nota < 7) {
    echo "Bien";
} elseif ($nota < 9) {
    echo "Notable";
} elseif ($nota <= 10) {
    echo "Sobresaliente";
}else {
    echo "Error: la nota debe estar entre 0 y 10";
}