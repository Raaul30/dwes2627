<?php

/*
    ejemplo 3.5
    descripcion:
    if alternativo para plantillas HTML

    Dependiendo del perfil se mostrará en menú unas acciones u otras
    Tipos de perfiles:
        - Admin
        - User
*/

// Models

// Negociado
$perfil = 'admin';

// Vista
include 'views/index.view.php';