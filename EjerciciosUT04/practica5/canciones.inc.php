<?php

    function buscarCancion(...$busqueda){

    $canciones = [
        ['titulo'=>'Hola','album'=>'ewqewq','genero'=>'Pop'],
        ['titulo'=>'Hola2','album'=>'ewqewq2','genero'=>'Jazz']
    ];

    $texto = trim(htmlspecialchars($_POST['texto']));
    $buscar = trim(htmlspecialchars($_POST['radio1']));
    $genero = trim(htmlspecialchars($_POST['genero']));

    require 'practica5.php';
}
?>