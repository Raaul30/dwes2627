<!doctype html>
<html lang="es">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Películas - Editar</title>

    <!-- css bootstrap 6.0 -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@6.0.0-alpha.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-B/GM4XqrwHnWXNOWMbloTmrYXZg10cakYGmpfsR/bbzQ6JAJI4ihuyADKLnBgrCe" crossorigin="anonymous">
    
    <!-- icons bootstrap 1.13.2 -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.13.2/font/bootstrap-icons.min.css">
</head>

<body>
    <!-- capa principal de la aplicación -->
    <div class="container mt-3 mb-5 pb-5">

        <!-- cabecera de la aplicación -->
        <header class="bg-primary text-white p-3 mb-3">
            <i class="bi bi-stack"></i>
            <span class="fs-6">Panel de Control - Películas</span>
        </header>

        <!-- contenido principal de la aplicación -->
        <main>
            <div class="content">

                <legend>Formulario Editar Película</legend>

                <form method="POST" action="update.php">
                    

                    <div class="mb-3">
                        <label class="form-label">Id</label>
                        <input type="text" class="form-control" name="id" value="<?= $pelicula['id'] ?>" readonly>
                    </div>

                    <div class="mb-3">
                        <label class="form-label">Título</label>
                        <input type="text" class="form-control" name="titulo" value="<?= $pelicula['titulo'] ?>" required>
                    </div>

                    <div class="mb-3">
                        <label class="form-label">Idioma</label>
                        <input type="text" class="form-control" name="idioma" value="<?= $pelicula['idioma'] ?>" required>
                    </div>

                    <div class="mb-3">
                        <label class="form-label">Director</label>
                        <input type="text" class="form-control" name="director" value="<?= $pelicula['director'] ?>" required>
                    </div>

                    <div class="mb-3">
                        <label class="form-label">Géneros</label>
                        <input type="text" class="form-control" name="generos" value="<?= implode(",", $pelicula['generos']) ?>" required>
                    </div>

                    <div class="mb-3">
                        <label class="form-label">Año</label>
                        <input type="text" class="form-control" name="año" value="<?= $pelicula['año'] ?>" required>
                    </div>

                    <a class="btn btn-secondary" href="index.php" role="button">Cancelar</a>
                    <button type="reset" class="btn btn-danger">Borrar</button>
                    <button type="submit" class="btn btn-primary">Actualizar película</button>

                </form>

            </div>
        </main>

        <!-- pie de página de la aplicación -->
        <footer class="footer mt-auto py-3 fixed-bottom bg-light">
            <div class="container">
                <span class="text-muted">&copy; 2026
                    Raúl Bueno García - DWES - 2º DAW - Curso 26/27
                </span>
            </div>
        </footer>

        <!-- js bootstrap básico 6.0 -->
        <script type="module" src="https://cdn.jsdelivr.net/npm/bootstrap@6.0.0-alpha.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-1a/pXj49ZQ1aHEmrJ+gMw1otqoVsYwlEnlD8mIfY2TV03r20Y0CN7uqx1tQogjPL" crossorigin="anonymous"></script>

    </div>
</body>

</html>