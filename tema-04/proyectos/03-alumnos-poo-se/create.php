<?php

require_once 'class/Alumno.php';
require_once 'class/TablaAlumnos.php';

$nombre = $_POST['nombre'] ?? null;
$apellidos = $_POST['apellidos'] ?? null;
$email = $_POST['email'] ?? null;
$f_nacimiento = $_POST['f_nacimiento'] ?? null;
$curso = isset($_POST['curso']) ? (int) $_POST['curso'] : null;

$asignaturas = isset($_POST['asignaturas'])
    ? array_map('intval', $_POST['asignaturas'])
    : [];

$alumno = new Alumno(
    5,
    $nombre,
    $apellidos,
    $email,
    $f_nacimiento,
    $curso,
    $asignaturas
);

$tabla_alumnos = new TablaAlumnos();

$tabla_alumnos->talumnos = TablaAlumnos::addAlumnos();

$tabla_alumnos->create($alumno);

$alumnos = $tabla_alumnos->talumnos;

$cursos = TablaAlumnos::getCursos();

$asignaturas = TablaAlumnos::getAsignaturas();

include 'views/index.view.php';

?>
