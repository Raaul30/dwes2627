<?php

/**
 * filter.php
 *
 * permite ordenar los libros existentes en la tabla de libros
 *
 * @package    CRUD Libros
 * @author     Tu Nombre
 * @version    1.0
 * 
 * Tabla  libros:
    *  - id (INT, PRIMARY KEY, AUTO_INCREMENT)
    *  - titulo (VARCHAR(255))
    *  - autor (VARCHAR(255))
    *  - editorial (VARCHAR(255))
    *  - generos 
    *  - precio 

*/

// Cargar librerias
require_once 'libs/functions.php';

// Models

// Negociado
// Obtener el prompt de busqueda que pasa por la URL
// filter.php?prompo=cervantes
$prompt = htmlspecialchars($_GET['prompt'] ?? null);

// Validar el prompt recibido

// Cargar el array de libros
$libros = get_libros();

// Filtrar el arary de libros a partir del prompt
$aux = [];
foreach($libros as $libro) {
    // Recorro cada campo del libro
    if (array_search($prompt, $libro) !== false){
        // Si el libro contiene la expresión de búsqueda,
        // añado el libro al array auxiliar
        $aux[] = $libro;
    }
}

$libros = $aux;

// Cargo la vista de edición con los detalles del libro a editar
require_once 'views/index.view.php';



