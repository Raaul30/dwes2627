<?php
require_once 'libs/functions.php';
$indice = htmlspecialchars($_GET['indice'] ?? null);
$peliculas = get_peliculas();
$pelicula = $peliculas[$indice] ?? [];

$id = $pelicula['id'] ?? '';
$titulo = $pelicula['titulo'] ?? '';
$idioma = $pelicula['idioma'] ?? '';
$director = $pelicula['director'] ?? '';
$generos = implode(",", $pelicula['generos']) ?? '';
$año = $pelicula['año'] ?? '';
$duracion = $pelicula['duracion'] ?? '';
$recaudado = $pelicula['recaudado'] ?? '';

require_once 'views/edit.view.php';