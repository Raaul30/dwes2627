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

// Obtener los detalles del formulario d registro
$usuario = $_POST['usuario'] ?? '';
$email = $_POST['email'] ?? '';
$password = $_POST['password'] ?? '';
$perfil = $_POST['perfil'] ?? '';

// Valdación de los datos del formulario

// Vista
include "views/acceso.view.php";