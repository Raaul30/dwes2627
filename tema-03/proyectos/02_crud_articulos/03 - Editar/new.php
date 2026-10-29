<?php
/*
new.php

Permite crear un nuevo libro en la base de datos.
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
$articulos = get_articulos();

// Views
include 'views/new.view.php';