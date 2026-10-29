<?php
/*
edit.php

Permite editar un  libro a partir de los datos enviados en el formulario.
Muestra una lista de articulos y permite agregar, editar y eliminar articulos.

@package CRUD articulos
@author  Raúl Bueno
@version 1.0

Tabal articulos:
    - id (INT, PRIMARY KEY, AUTO_INCREMENT)
    - titulo (VARCHAR(255))
    - autor (VARCHAR(255))
    - editorial (VARCHAR(255))
    - generos
    - precio

*/

// Caragr librerías
require_once 'libs/functions.php';

// Models

// Negociado

// Obtener el índice del libro a editar desde la URL
//edit.php?indice=0 - edito el primer libro
$indice = htmlspecialchars($_GET['indice'] ?? null);

// Validar el índice recibido

// Cargar el array de articulos
$articulos = get_articulos();

// Obtenemos el libro a editar
$articulo = $articulos[$indice];

require_once 'views/edit.view.php';