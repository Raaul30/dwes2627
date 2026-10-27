<?php

/*
    libreria : funciones_articulos.php
    Funciones auxiliares para el proyecto CRUD de articulos.

    Funciones incluidas:
        - get_articulos(): Devuelve un array con todos los articulos creados.
        - generar_tabla_categorias(): Devuelve un array con todas las categorias
*/

// Funcion get_articulos()
function get_articulos()
{
    $articulos = [
        [
            'id'          => 1,
            'descripcion' => 'Monitor Samsung 24 pulgadas Full HD',
            'modelo'      => 'Samsung LS24C310EAUXEN',
            'categoria'   => 'Pantalla',
            'unidades'    => 45,
            'precio'      => 129.99
        ],
        [
            'id'          => 2,
            'descripcion' => 'Teclado mecánico gaming RGB',
            'modelo'      => 'Logitech G213 Prodigy',
            'categoria'   => 'Componente',
            'unidades'    => 75,
            'precio'      => 59.99
        ],
        [
            'id'          => 3,
            'descripcion' => 'Ratón inalámbrico óptico',
            'modelo'      => 'Logitech M185',
            'categoria'   => 'Componente',
            'unidades'    => 100,
            'precio'      => 19.95
        ],
        [
            'id'          => 4,
            'descripcion' => 'Ordenador portátil ASUS 15.6 pulgadas',
            'modelo'      => 'ASUS VivoBook 15',
            'categoria'   => 'Portátil',
            'unidades'    => 25,
            'precio'      => 549.00
        ],
        [
            'id'          => 5,
            'descripcion' => 'Impresora multifunción Canon PIXMA',
            'modelo'      => 'Canon PIXMA TS5350i',
            'categoria'   => 'Impresora',
            'unidades'    => 30,
            'precio'      => 79.99
        ]
    ];

    return $articulos;
}

// Funcion generar_tabla_categorias
function generar_tabla_categorias()
{
    return ['Portátil', 'PC sobremesa', 'Componente', 'Pantalla', 'Impresora'];
}

// Funcion get_indice_articulo_por_id
function get_indice_articulo_por_id($articulos, $id)
{
    foreach ($articulos as $indice => $articulo) {
        if ($articulo['id'] == $id) {
            return $indice;
        }
    }

    return false;
}