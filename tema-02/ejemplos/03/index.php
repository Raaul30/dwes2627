<?php
    $nombre = "Juan";
    $apellidos = "Pérez López";
    $edad = 30;
    $poblacion = "Madrid";
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hola Mundo</title>
</head>
<body>
    <h1>Ficha de alumnos</h1>
    <?php
        // Mostar los valores de la variable en HTML
        echo "<b>Nombre:</b> ". $nombre . "<br>";
        echo "<b>Apellidos:</b> ". $apellidos . "<br>";
        echo "<b>Edad:</b> ". $edad . "<br>";
        echo "<b>Población:</b> ". $poblacion . "<br>";
    ?>
</body>
</html>