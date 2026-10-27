<?php

/*
    Librería: functions.php
    Funciones auxiliarres para el proyecto CRUD de libros.

    Funciones incluidas:
        - get_articulos(): Devuelve un array con todos los articulos de la base de datos.
*/

// Función get_libros(): Devuelve un array con todos los articulos creados
function get_articulos(){
    $articulos = [
        [
            'id'          => 1,
            'descripcion' => 'Monitor Samsung 24 pulgadas Full HD',
            'modelo'      => 'Samsung LS24C310EAUXEN',
            'categorias'   => ['Pantalla', 'Electrónica'],
            'unidades'    => 45,
            'precio'      => 129.99
        ],
        [
            'id'          => 2,
            'descripcion' => 'Teclado mecánico gaming RGB',
            'modelo'      => 'Logitech G213 Prodigy',
            'categorias'   => ['Componente', 'Electrónica'],
            'unidades'    => 75,
            'precio'      => 59.99
        ],
        [
            'id'          => 3,
            'descripcion' => 'Ratón inalámbrico óptico',
            'modelo'      => 'Logitech M185',
            'categorias'   => ['Componente', 'Electrónica'],
            'unidades'    => 100,
            'precio'      => 19.95
        ],
        [
            'id'          => 4,
            'descripcion' => 'Ordenador portátil ASUS 15.6 pulgadas',
            'modelo'      => 'ASUS VivoBook 15',
            'categorias'   => ['Portátil', 'Electrónica'],
            'unidades'    => 25,
            'precio'      => 549.00
        ],
        [
            'id'          => 5,
            'descripcion' => 'Impresora multifunción Canon PIXMA',
            'modelo'      => 'Canon PIXMA TS5350i',
            'categorias'   => ['Impresora', 'Electrónica'],
            'unidades'    => 30,
            'precio'      => 79.99
        ]
    ];
    return $articulos;
}