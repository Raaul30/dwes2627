<?php

// Rutas absolutas
require_once __DIR__. 'class/Cliente.php';

// Crear un objeto de la clase cliente con los valores:
// Inforsierra, Ubrique, 12123456Z
$c1 = new Cliente('Inforsierra', 'Ubrique', '12123456Z');

var_dump($c1);

$c1->getNombre();
echo '<br>';
$c1->getPoblacion();
echo '<br>';
$c1->getDni();
echo '<br>';

$c2 = new Cliente();
var_dump($c2);