<!doctype html>
<html lang="es">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap 6.0</title>

    <!-- css bootstrap 6.0 -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@6.0.0-alpha.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-B/GM4XqrwHnWXNOWMbloTmrYXZg10cakYGmpfsR/bbzQ6JAJI4ihuyADKLnBgrCe" crossorigin="anonymous">


    <!-- icons bootstrap 1.13.2 -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.13.2/font/bootstrap-icons.min.css">
</head>

<body>
    <!-- capa principal de la aplicación -->
    <div class="container mt-3">

        <!-- cabecera de la aplicación -->
        <header class="bg-primary text-white p-3 mb-3">
            <i class="bi bi-stack"></i>
            <span class="fs-6">Título de aplicación</span>
        </header>

        <!-- contenido principal de la aplicación -->
        <main>
            <div class="content">

                <h1> Lista de artículos</h1>

                <table class="table">
                    <thead>
                        <tr>
                            <th scope="col">id</th>
                            <th scope="col">Descripcion</th>
                            <th scope="col">Modelo</th>
                            <th scope="col">Categoria</th>
                            <th scope="col">Unidades</th>
                            <th scope="col">Precio</th>
                            <th scope="col">Acciones</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php foreach ($articulos as $articulo): ?>
                            <tr>
                                <th scope="row" class="text-end"><?= $articulo['id'] ?></th>
                                <td><?= $articulo['descripcion'] ?></td>
                                <td><?= $articulo['modelo'] ?></td>
                                <td><?= $articulo['categoria'] ?></td>
                                <td class="text-end"><?= $articulo['unidades'] ?></td>
                                <td class="text-end"><?= number_format($articulo['precio'], 2, ',', '.') ?> €</td>

                                <!-- botones de acción -->
                                <td>
                                    <!-- Editar -->
                                    <a href="edit.php?indice=<?= $indice ?>" class="btn btn-outline-primary btn-sm" title="Editar">
                                        <i class="bi bi-pencil"></i>
                                    </a>
                                    <!-- eliminar -->
                                    <a href="delete.php" class="btn btn-outline-primary btn-sm" title="Eliminar">
                                        <i class="bi bi-trash"></i>
                                    </a>
                                    <!-- mostrar -->
                                    <a href="show.php" class="btn btn-outline-primary btn-sm" title="Mostrar">
                                        <i class="bi bi-eye"></i>
                                    </a>
                                </td>

                            </tr>
                        <?php endforeach; ?>

                </table>

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