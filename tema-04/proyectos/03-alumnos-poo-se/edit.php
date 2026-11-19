<?php

require_once 'class/Alumno.php';
require_once 'class/TablaAlumnos.php';

$id = isset($_GET['id']) ? (int) $_GET['id'] : 0;

$tabla_alumnos = new TablaAlumnos();

$tabla_alumnos->talumnos = TablaAlumnos::addAlumnos();

$indice = $tabla_alumnos->getIndiceById($id);

if ($indice === null) {
    header('Location: index.php');
    exit;
}

$alumno = $tabla_alumnos->read($indice);

$cursos = TablaAlumnos::getCursos();

$asignaturas = TablaAlumnos::getAsignaturas();

include 'views/edit.view.php';

?>
