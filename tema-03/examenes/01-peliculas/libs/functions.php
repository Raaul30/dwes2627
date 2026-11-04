<?php
/**
 * functions.php - Librería con los datos en memoria de películas
 */
function get_peliculas() {
    return [
        [ 
          "id" => 1,
          "titulo" => "Joker",
          "idioma" => 'Inglés',
          "director" => "Todd Phillips",
          "generos" => ['Terror', 'Drama'],
          "año" => 2019,
          "duracion" => 122,
          "recaudado" => 12.1
        ],
        [ 
          "id" => 2,
          "titulo" => "Mientras dure la guerra",
          "idioma" => 'Español',
          "director" => "Alejandro Amenábar",
          "generos" => ['Histórica', 'Drama'],
          "año" => 2019,
          "duracion" => 110,
          "recaudado" => 17.5
        ],
        [ 
          "id" => 3,
          "titulo" => "Terminator.Destino oscuro",
          "idioma" => 'Inglés',
          "director" => "Tim Miller",
          "generos" => ['Acción', 'Ciencia Ficción'],
          "año" => 2019,
          "duracion" => 120,
          "recaudado" => 21.2
        ],
        [ 
          "id" => 4,
          "titulo" => "La vida es bella",
          "idioma" => 'Italiano',
          "director" => "Roberto Benini",
          "generos" => ['Comedia', 'Drama'],
          "año" => 1997,
          "duracion" => 116,
          "recaudado" => 41.2
        ],
        [ 
            "id" => 5,
            "titulo" => "Interstellar",
            "idioma" => 'Inglés',
            "director" => "Christopher Nolan",
            "generos" => ['Ciencia Ficción', 'Drama'],
            "año" => 2014,
            "duracion" => 169,
            "recaudado" => 76.0
        ],
        [
            "id" => 6,
            "titulo" => "La La Land",
            "idioma" => 'Inglés',
            "director" => "Damien Chazelle",
            "generos" => ['Romance', 'Drama'],
            "año" => 2016,
            "duracion" => 128,
            "recaudado" => 34.1
        ]
    ];
}

function obtener_id_nueva_pelicula($peliculas = []) {
    $ultima_pelicula = end($peliculas);

    $ultimo_id = $ultima_pelicula['id'];

    return $ultimo_id + 1;
}
