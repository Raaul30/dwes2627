<?php

/*
    Clase Padre: Producto
    Clase Hija: Libro sin constructor
*/

require_once 'class/Producto.php';

//Ejecuta el constructor de la clase padre
$libro = new Libro(1, 'El Quijote', 19.99, 'Novela', 5);

echo $libro->getResumen();
echo $libro->getcategoria();

var_dump($libro);