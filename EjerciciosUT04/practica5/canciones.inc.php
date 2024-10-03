<?php
require 'practica5.php';


function buscarCancion(...$busqueda)
{

    $canciones = [
        ['titulo' => 'Hola', 'album' => 'ewqewq', 'genero' => 'Pop'],
        ['titulo' => 'Hola2', 'album' => 'ewqewq2', 'genero' => 'Jazz']
    ];

    return $canciones;
}


if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $texto = $_POST['texto'];
    $buscarEn = $_POST['radio1'];
    $genero = $_POST['genero'];

    
}

?>