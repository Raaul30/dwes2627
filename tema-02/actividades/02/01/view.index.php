<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>

    <!-- css bootrstrap básico 5.3.8-->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">
    <!--icons bootstrap básico 5.3.8 -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.13.1/font/bootstrap-icons.min.css">
</head>

<body>
    <!--Capa principal de la aplicación -->
    <div class="container mt-3">

        <!-- Cabecera de la aplicación -->
        <header class="bg-primary text-white p-3 mb-3">
            <i class="bi bi-stack"></i>
            <span class="fs-6">Actividad 2.2.1</span>
        </header>

        <!-- Contenido principal de la aplicación -->
        <main>
            <div class="content">
                <h1>Conversiones de datos en expresiones</h1>

                <p>
                    <strong>1. Multiplicar entero con cadena:</strong><br>
                    Resultado: <?php echo $resultado1; ?><br>
                    Tipo de dato: <?php echo gettype($resultado1); ?>
                </p>

                <p>
                    <strong>2. Sumar entero con cadena:</strong><br>
                    Resultado: <?php echo $resultado2; ?><br>
                    Tipo de dato: <?php echo gettype($resultado2); ?>
                </p>

                <p>
                    <strong>3. Sumar entero con float:</strong><br>
                    Resultado: <?php echo $resultado3; ?><br>
                    Tipo de dato: <?php echo gettype($resultado3); ?>
                </p>

                <p>
                    <strong>4. Concatenar entero con cadena:</strong><br>
                    Resultado: <?php echo $resultado4; ?><br>
                    Tipo de dato: <?php echo gettype($resultado4); ?>
                </p>

                <p>
                    <strong>5. Sumar entero con booleano:</strong><br>
                    Resultado: <?php echo $resultado5; ?><br>
                    Tipo de dato: <?php echo gettype($resultado5); ?>
                </p>

            </div>
        </main>

        <!-- Pie de página de la aplicación -->
        <footer class="footer mt-auto py-3 fixed-bottom bg-light">
            <div class="container">
                <span class="text-muted">&copy;2026
                    Raúl Bueno - DWES -2º DAW - Curso 26/27
                </span>
            </div>
        </footer>

        <!-- js bootstrap básico 5.3.8 -->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js" integrity="sha384-FKyoEForCGlyvwx9Hj09JcYn3nv7wiPVlz7YYwJrWVcXK/BmnVDxM+D2scQbITxI" crossorigin="anonymous"></script>

    </div>
</body>

</html>