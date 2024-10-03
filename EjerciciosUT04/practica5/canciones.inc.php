<?php

require 'practica5.php';

function buscarCancion()
{

    $canciones = [
        ['titulo' => 'Take On Me', 'album' => 'Hunting High and Low', 'genero' => 'Pop'],
        ['titulo' => 'Dancing Queen', 'album' => 'Arrival', 'genero' => 'Pop'],

        ['titulo' => 'Thunder Road', 'album' => 'Born to Run', 'genero' => 'Rock'],
        ['titulo' => 'Highway Star', 'album' => 'Machine Head', 'genero' => 'Rock'],

        ['titulo' => 'Take Five', 'album' => 'Time Out', 'genero' => 'Jazz'],
        ['titulo' => 'My Baby Just Cares for Me', 'album' => 'Little Girl Blue Star', 'genero' => 'Jazz'],

        ['titulo' => 'Stone Crazy', 'album' => 'I Was Walking Through the Woods', 'genero' => 'Blues'],
        ['titulo' => 'Sno-Cone, Part 2', 'album' => 'Truckin with Albert Collins', 'genero' => 'Blues'],
    ];

    return $canciones;
}


if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $texto = $_POST['texto'];
    $buscarEn = $_POST['radio1'];
    $genero = $_POST['genero'];

    $cancionesEncontradas = [];


    echo "<table border='1'>";
    echo "<tr>";

    echo "<th>Titulo</th>";
    echo "<th>Album</th>";
    echo "<th>Genero</th>";

    echo "</tr>";
    foreach (buscarCancion() as $canciones) {
        
        if ($buscarEn == 'titulo') {
            if (strpos($canciones['titulo'], $texto) !== false) {
                echo "<tr>";
                print('<td>' . $canciones['titulo'] . '</td>');
                print('<td>' . $canciones['album'] . '</td>');
                print('<td>' . $canciones['genero'] . '</td>');
                echo "</tr>";
            }
        } else if ($buscarEn == 'album') {
            if (strpos($canciones['album'], $texto) !== false) {
                echo "<tr>";
                print('<td>' . $canciones['titulo'] . '</td>');
                print('<td>' . $canciones['album'] . '</td>');
                print('<td>' . $canciones['genero'] . '</td>');
                echo "</tr>";
            }
        } else if ($buscarEn == 'ambos') {
            if (strpos($canciones['titulo'], $texto) !== false || strpos($canciones['album'], $texto) !== false) {
                echo "<tr>";
                print('<td>' . $canciones['titulo'] . '</td>');
                print('<td>' . $canciones['album'] . '</td>');
                print('<td>' . $canciones['genero'] . '</td>');
                echo "</tr>";
            }
        }
        
    }
    echo "</table>";
}
