<?php

    /*
        Actividad 3.2
        Descripción: Formulario de registro co acceso según perfil de usuario.

        Formulario de resgistro:
            - Nombre de usuario
            - Email
            - Contraseña o password
            - Perfil de usuario (admin, edit, user)

        Tipos de perfiles y privilegios:
            - Admin: Añadir, eliminar, actualizar y consultar
            - Edit: Añadir, actualizar y consultar
            - User: Consultar
    */

// Models

// Negociado
// Crear lista de perfiles
$perfiles = ['admin', 'edit', 'user'];

// Vistas
include "views/index.view.php";