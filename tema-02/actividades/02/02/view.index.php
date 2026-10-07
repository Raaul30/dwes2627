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
                <h1>Función is_null()</h1>

                <h2>Valores verdaderos</h2>

                <p>
                    is_null($valor1):<?php echo is_null($valor1) ? "true" : "false"; ?>
                </p>

                <p>
                    is_null($valor2):<?php echo is_null($valor2) ? "true" : "false"; ?>
                </p>

                <p>
                    is_null($valor3):<?php echo is_null($valor3) ? "true" : "false"; ?>
                </p>

                <h2>Valores falsos</h2>

                <p>
                    is_null($valor4):<?php echo is_null($valor4) ? "true" : "false"; ?>
                </p>

                <p>
                    is_null($valor5):<?php echo is_null($valor5) ? "true" : "false"; ?>
                </p>

                <p>
                    is_null($valor6):<?php echo is_null($valor6) ? "true" : "false"; ?>
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