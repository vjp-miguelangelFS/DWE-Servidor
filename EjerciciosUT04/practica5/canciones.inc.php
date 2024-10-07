<?php
// 
// require 'practica5.php';

// Esta función mostra la tabla con un foreach que recorre el array de canciones encontradas y las muestra por pantalla
function mostrarTabla($canciones)
{
    echo "<table border='1'>";
    echo "<tr>";

    echo "<th>Titulo</th>";
    echo "<th>Album</th>";
    echo "<th>Genero</th>";

    echo "</tr>";

    foreach ($canciones as $cancion) {
        echo "<tr>";
        print('<td>' . $cancion['titulo'] . '</td>');
        print('<td>' . $cancion['album'] . '</td>');
        print('<td>' . $cancion['genero'] . '</td>');
        echo "</tr>";
    }

    echo "</table>";
}

// Creo un array con la listas de las canciones y devulvo el array
function buscarCancion()
{

    $cancion = [
        ['titulo' => 'Take On Me', 'album' => 'Hunting High and Low', 'genero' => 'Pop'],
        ['titulo' => 'Dancing Queen', 'album' => 'Arrival', 'genero' => 'Pop'],

        ['titulo' => 'Thunder Road', 'album' => 'Born to Run', 'genero' => 'Rock'],
        ['titulo' => 'Highway Star', 'album' => 'Machine Head', 'genero' => 'Rock'],

        ['titulo' => 'Take Five', 'album' => 'Time Out', 'genero' => 'Jazz'],
        ['titulo' => 'My Baby Just Cares for Me', 'album' => 'Little Girl Blue Star', 'genero' => 'Jazz'],

        ['titulo' => 'Stone Crazy', 'album' => 'I Was Walking Through the Woods', 'genero' => 'Blues'],
        ['titulo' => 'Sno-Cone, Part 2', 'album' => 'Truckin with Albert Collins', 'genero' => 'Blues'],
    ];

    return $cancion;
}

// En caso de que si rellene el formulario recorreca el array de las canciónes buscando canciones que coincidadan con los requisitos recibidos del formulario
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $texto = $_POST['texto'];
    $buscarEn = $_POST['radio1'];
    $genero = $_POST['genero'];

    $cancionesEncontradas;

    foreach (buscarCancion() as $cancion) {
        // Mediante un if determina en que campo debe de buscar el texto relleno en el formulatio,
        // y cuando se entre en el if buscara las canciones que coincidaan con el genero seleccionado en el formulario.
        if ($buscarEn == 'titulo') {
            if (strpos($cancion['titulo'], $texto) !== false) {
                if ($cancion['genero'] == $genero) {
                    $cancionesEncontradas[] = $cancion;
                } else if ($genero == 'Todos') {
                    $cancionesEncontradas[] = $cancion;
                }
            }
        } else if ($buscarEn == 'album') {
            if (strpos($cancion['album'], $texto) !== false) {
                if ($cancion['genero'] == $genero) {
                    $cancionesEncontradas[] = $cancion;
                } else if ($genero == 'Todos') {
                    $cancionesEncontradas[] = $cancion;
                }
            }
        } else if ($buscarEn == 'ambos') {
            if (strpos($cancion['titulo'], $texto) !== false || strpos($cancion['album'], $texto) !== false) {
                if ($cancion['genero'] == $genero) {
                    $cancionesEncontradas[] = $cancion;
                } else if ($genero == 'Todos') {
                    $cancionesEncontradas[] = $cancion;
                }
            }
        }
    }

    // Si $cancionesEncontradas no esta vacia mostrara la tabla y
    // en caso de que $cancionesEncontradas este vacia mostra un mesaje informativo al usuario
    if (isset($cancionesEncontradas)) {
        mostrarTabla($cancionesEncontradas);
    } else {
        print 'No se ha encontrado ninguna canción';
    }
}
