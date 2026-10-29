<?php
/*
create.php

Permite crear un nuevo artículo a partir de los datos enviados en el formulario.
*/

// Cargar librerías
require_once 'libs/functions.php';

// Models

// Negociado

// Extraer los datos del formulario
$descripcion = htmlspecialchars($_POST['descripcion'] ?? '');
$modelo = htmlspecialchars($_POST['modelo'] ?? '');
$unidades = htmlspecialchars($_POST['unidades'] ?? '');
$categorias = htmlspecialchars($_POST['categorias'] ?? '');
$precio = floatval($_POST['precio'] ?? 0);

// Proceso de validación de datos del formulario

// Crear un array asociativo con los datos del artículo (usando $new_articulo)
$new_articulo = [
    'id'          => null,
    'descripcion' => $descripcion,
    'modelo'      => $modelo,
    'unidades'    => $unidades,
    'categorias'  => explode(', ', $categorias),
    'precio'      => $precio
];

// Obtener el array articulos existente
$articulos = get_articulos();

// Obtener id del nuevo articulo creado y asignárselo
$new_articulo['id'] = obtener_id_nuevo_articulo($articulos);

// Agregar el artículo al array de articulos
$articulos[] = $new_articulo;

// Views
include 'views/index.view.php';