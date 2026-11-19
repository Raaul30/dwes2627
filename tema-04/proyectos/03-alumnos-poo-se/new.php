<?php

require_once 'class/Alumno.php';
require_once 'class/TablaAlumnos.php';

$cursos = TablaAlumnos::getCursos();

$asignaturas = TablaAlumnos::getAsignaturas();

include 'views/new.view.php';

?>
