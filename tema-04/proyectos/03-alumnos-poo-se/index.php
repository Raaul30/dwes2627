<?php

require_once 'class/Alumno.php';
require_once 'class/TablaAlumnos.php';

$tabla_alumnos = new TablaAlumnos();

$tabla_alumnos->talumnos = TablaAlumnos::addAlumnos();

$alumnos = $tabla_alumnos->talumnos;

$cursos = TablaAlumnos::getCursos();

$asignaturas = TablaAlumnos::getAsignaturas();

include 'views/index.view.php';

?>
