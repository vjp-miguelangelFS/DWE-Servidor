<?php

// require 'practica5.php';

function cabeceraTabla()
{
    echo "<table border='1'>";
    echo "<tr>";

    echo "<th>Titulo</th>";
    echo "<th>Album</th>";
    echo "<th>Genero</th>";

    echo "</tr>";
}

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


if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $texto = $_POST['texto'];
    $buscarEn = $_POST['radio1'];
    $genero = $_POST['genero'];

    $cancionesEncontradas;

    foreach (buscarCancion() as $cancion) {

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

    if (isset($cancionesEncontradas)) {
        cabeceraTabla();
        foreach ($cancionesEncontradas as $cancion) {
            echo "<tr>";
            print('<td>' . $cancion['titulo'] . '</td>');
            print('<td>' . $cancion['album'] . '</td>');
            print('<td>' . $cancion['genero'] . '</td>');
            echo "</tr>";
        }
        echo "</table>";
    } else {
        print 'No se ha encontrado ninguna canción';
    }
}
