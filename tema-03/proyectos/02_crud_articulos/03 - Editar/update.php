<?php
/*
update.php

Permite actualizar un libro a partir de los datos enviados en el formulario.
Muestra una lista de libros y permite agregar, editar y eliminar libros.

@package CRUD Libros
@author  Raúl Bueno
@version 1.0

Tabla libros:
    - id (INT, PRIMARY KEY, AUTO_INCREMENT)
    - titulo (VARCHAR(255))
    - autor (VARCHAR(255))
    - editorial (VARCHAR(255))
    - generos
    - precio

*/

// Cargar librerías
require_once 'libs/functions.php';

// Models

// Negociado
// Obtener el índice del libro a editar desde la URL (o si lo pasas por oculto, ajustamos, pero siguiendo tu ejemplo por GET o POST según lo envíes)
// Si en el form de edit.view.php pusiste un input hidden o va por GET, lo cogemos:
$indice = $_POST['indice'] ?? $_GET['indice'] ?? null;

// Cargar el array de libros
$libros = get_libros();

// Cargo los datos del formulario
$titulo = htmlspecialchars($_POST['titulo'] ?? '');
$autor = htmlspecialchars($_POST['autor'] ?? '');
$editorial = htmlspecialchars($_POST['editorial'] ?? '');
$generos = htmlspecialchars($_POST['generos'] ?? '');
$precio = floatval($_POST['precio'] ?? 0);

// Crear array asociativo con los datos del libro editado manteniendo el id original
$edit_book = [
    'id' => $libros[$indice]['id'],
    'titulo' => $titulo,
    'autor' => $autor,
    'editorial' => $editorial,
    'generos' => explode(', ', $generos),
    'precio' => $precio
];

// Actualizar el libro en el array de libros
$libros[$indice] = $edit_book;

// Views
require_once 'views/index.view.php';