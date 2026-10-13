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
            <i class="bi bi-speedometer2"></i>
            <span class="fs-6">Examen práctico 03 - Movimiento rectilíneo uniformemente acelerado</span>
        </header>

        <!-- Contenido principal de la aplicación -->
        <main>
            <div class="content">

                <form method="post">

                    <!-- velocidad inicial -->
                    <div class="mb-3">
                        <label for="velocidad_inicial" class="form-label">Velocidad inicial (m/s):</label>
                        <input type="number" class="form-control" step="0.01" placeholder="0.00" name="velocidad_inicial" id="velocidad_inicial" required>
                    </div>
                    <!-- aceleración -->
                    <div class="mb-3">
                        <label for="aceleracion" class="form-label">Aceleración (m/s2):</label>
                        <input type="number" class="form-control" step="0.01" placeholder="0.00" name="aceleracion" id="aceleracion" required>
                    </div>
                    <!-- tiempo -->
                    <div class="mb-3">
                        <label for="tiempo" class="form-label">Tiempo (s):</label>
                        <input type="number" class="form-control" step="0.01" placeholder="0.00" name="tiempo" id="tiempo" required>
                    </div>
                    <!-- masa -->
                    <div class="mb-3">
                        <label for="masa" class="form-label">Masa (kg):</label>
                        <input type="number" class="form-control" step="0.01" placeholder="0.00" name="masa" id="masa" required>
                    </div>
                    
                    <!-- boton -->
                    <div class="btn-group" role="group">
                        <button type="submit" class="btn btn-warning" value="calcular" formaction="calcular.php">Calcular</button>
                    </div>

                </form>
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