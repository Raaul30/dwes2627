<?php
/*
update.php

Permite actualizar un libro a partir de los datos enviados en el formulario.
Muestra una lista de articulos y permite agregar, editar y eliminar articulos.

@package CRUD articulos
@author  Raúl Bueno
@version 1.0

Tabla articulos:
    - id (INT, PRIMARY KEY, AUTO_INCREMENT)
    - descripcion (VARCHAR(255))
    - modelo (VARCHAR(255))
    - unidades (VARCHAR(255))
    - categorias
    - precio

*/

// Cargar librerías
require_once 'libs/functions.php';

// Models

// Negociado
// Obtener el índice del libro a editar desde la URL (o si lo pasas por oculto, ajustamos, pero siguiendo tu ejemplo por GET o POST según lo envíes)
// Si en el form de edit.view.php pusiste un input hidden o va por GET, lo cogemos:
$indice = $_POST['indice'] ?? $_GET['indice'] ?? null;

// Cargar el array de articulos
$articulos = get_articulos();

// Cargo los datos del formulario
$descripcion = htmlspecialchars($_POST['descripcion'] ?? '');
$modelo = htmlspecialchars($_POST['modelo'] ?? '');
$unidades = htmlspecialchars($_POST['unidades'] ?? '');
$categorias = htmlspecialchars($_POST['categorias'] ?? '');
$precio = floatval($_POST['precio'] ?? 0);

// Crear array asociativo con los datos del libro editado manteniendo el id original
$edit_articulo = [
    'id' => $articulos[$indice]['id'],
    'descripcion' => $descripcion,
    'modelo' => $modelo,
    'unidades' => $unidades,
    'categorias' => explode(', ', $categorias),
    'precio' => $precio
];

// Actualizar el libro en el array de articulos
$articulos[$indice] = $edit_articulo;

// Views
require_once 'views/index.view.php';