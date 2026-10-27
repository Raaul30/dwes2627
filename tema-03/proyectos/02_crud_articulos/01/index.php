<?php
/*
index.php

Pagina principal del proyecto CRUD de articulos.
Muestra una lista de articulos y permite agregar, editar y eliminar articulos.

@package CRUD Articulos
@author  Raúl Bueno
@version 1.0

Tabal articulos:
    - id (INT, PRIMARY KEY, AUTO_INCREMENT)
    - descripcion (VARCHAR(255))
    - modelo (VARCHAR(255))
    - categorias (VARCHAR(255))
    - unidades
    - precio

*/

// Caragr librerías
require_once 'libs/functions.php';

// Models

// Negociado
$articulos = get_articulos();

// Views
include 'views/index.view.php';