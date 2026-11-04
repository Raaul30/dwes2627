<?php
require_once 'libs/functions.php';
$indice = htmlspecialchars($_GET['indice'] ?? null);

$id = $pelicula['id'] ?? '';
$titulo = $pelicula['titulo'] ?? '';
$idioma = $pelicula['idioma'] ?? '';
$director = $pelicula['director'] ?? '';
$generos = $pelicula['generos'] ?? '';
$año = $pelicula['año'] ?? '';
$duracion = $pelicula['duracion'] ?? '';
$recaudado = $pelicula['recaudado'] ?? '';

$peliculas = get_peliculas();
$editar_pelicula = [
    'id' => $id,
    'titulo' => $titulo,
    'idioma' => $idioma,
    'director' => $director,
    'generos' => explode(', ', $generos),
    'año' => $año,
    'duracion' => $duracion,
    'recaudado' => $recaudado
];

$peliculas[$id] = $editar_pelicula;

require_once 'views/index.view.php';