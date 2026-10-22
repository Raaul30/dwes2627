<?php

/*
    Librería: functions.php
    Funciones auxiliarres para el proyecto CRUD de libros.

    Funciones incluidas:
        - get_libros(): Devuelve un array con todos los libros de la base de datos.
        - obtener_id_nuevo_libro
*/

// Función get_libros(): Devuelve un array con todos los libros creados
function get_libros(){
    $libros = [
        [
            'id' => 1,
            'titulo' => 'Cien años de soledad',
            'autor' => 'Gabriel García Márquez',
            'editorial' => 'Editorial Sudamericana',
            'generos' => ['Realismo mágico', 'Novela'],
            'precio' => 19.99
        ],
        [
            'id' => 2,
            'titulo' => '1984',
            'autor' => 'George Orwell',
            'editorial' => 'Secker & Warburg',
            'generos' => ['Distopía', 'Ciencia ficción'],
            'precio' => 14.99
        ],
        [
            'id' => 3,
            'titulo' => 'El gran Gatsby',
            'autor' => 'F. Scott Fitzgerald',
            'editorial' => 'Charles Scribner\'s Sons',
            'generos' => ['Novela', 'Literatura Estadounidense'],
            'precio' => 12.99
        ],
        [
            'id' => 4,
            'titulo' => 'Matar a un ruiseñor',
            'autor' => 'Harper Lee',
            'editorial' => 'J. B. Lippincott & Co.',
            'generos' => ['Novela', 'Literatura Estadounidense'],
            'precio' => 15.99
        ],
        [
            'id' => 5,
            'titulo' => 'El código Da Vinci',
            'autor' => 'Dan Brown',
            'editorial' => 'Doubleday',
            'generos' => ['Thriller', 'Misterio'],
            'precio' => 18.99
        ]
    ];
    return $libros;
}

// Funcionobtener_id_nuevo_libro($libros): Devuelve el id del nuevo libro 

function obtener_id_nuevo_libro($libros = []){
    $ultimo_libro = end($libros);
    // Obtener el último elemento del array
    $ultimo_id = $ultimo_libro['id'];

    // Devolver el id del nuevo libro (ultimo id + 1)
    return $ultimo_id + 1;
}