<?php
require_once 'libs/functions.php';

$id = $_POST['id'] ?? null;
$titulo = $_POST['titulo'] ?? '';
$idioma = $_POST['idioma'] ?? '';
$director = $_POST['director'] ?? '';
$generos = $_POST['generos'] ?? '';
$año = $_POST['año'] ?? '';
$duracion = $_POST['duracion'] ?? '';
$recaudado = $_POST['recaudado'] ?? '';

$peliculas = get_peliculas();

$nuevo_id = obtener_id_nueva_pelicula($peliculas);
$nueva_pelicula = [
    'id' => $nuevo_id,
    'titulo' => $titulo,
    'idioma' => $idioma,
    'director' => $director,
    'generos' => explode(', ', $generos),
    'año' => $año,
    'duracion' => $duracion,
    'recaudado' => $recaudado
];

$peliculas[] = $nueva_pelicula;

include 'views/index.view.php';