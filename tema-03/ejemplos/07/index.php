<?php

/*
    Tipo de arrays:
        - escalares o indexados
*/

// Array escalar o indexado
//$colores = array("rojo", "verde", "azul", "amarillo");

$colores = ["rojo", "verde", "azul", "amarillo"];

// Acceder a un elemento del array
echo $colores[0]; // rojo

// Recorrer un array con un bucle for
for ($i = 0; $i < count($colores); $i++) {
    echo $colores[$i] . "<br>";
}

// Recorrer un array con un bucle foreach
foreach ($colores as $color) {
    echo $color . "<br>";
}

// Agregar un elemento
$colores[] = "naranja";

// Recorrer array mostrando indice y valor
foreach ($colores as $indice => $color) {
    echo "Indice: $indice, Color: $color <br>";
}

//Modificar elemento array
$colores[2] = "violeta";