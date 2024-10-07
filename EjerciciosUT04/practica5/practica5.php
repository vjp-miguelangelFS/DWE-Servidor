<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="author" content="Miguel Ángel Fernádez Sánchez">
    <title>Tema4-Ejercicio practica5</title>
</head>

<body>
    <!-- Formulario para buscar una canción -->
    <form action=<?= $_SERVER['PHP_SELF'] ?> method="post">
        <h1>Búsqueda de canciones</h1>
        <!-- Input para introduccir el texto que deseas buscar, para dar más funcionalidad al formulario en caso de que el campo texto se rellene no desaparecera -->
        <label for="texto">Texto a buscar: </label>
        <input type="text" name="texto" value="<?php if (isset($_POST['texto'])) echo $_POST['texto'] ?>">

        <br><br>
        <!-- Input para seleccionar donde deses buscar el texto introducido en el anteriorinput, igual que en el anterior input en caso de marcar un radio se quedara marcado y
        es obligatorio seleccionar una de las 3 opciones -->
        <label for="buscar">Buscar en: </label>

        <input type="radio" name="radio1" value="titulo" <?php if (isset($_POST['radio1']) && $_POST['radio1'] == 'titulo') print 'checked' ?>>
        <label for="titulo">Título de canción</label>

        <input type="radio" name="radio1" value="album" <?php if (isset($_POST['radio1']) && $_POST['radio1'] == 'album') print 'checked' ?>>
        <label for="album">Nombres de álbum</label>

        <input type="radio" name="radio1" value="ambos" <?php if (isset($_POST['radio1']) &&  $_POST['radio1'] == 'ambos') print 'checked' ?>>
        <label for="ambos">Ambos campos</label>

        <br><br>
        <!-- Input para seleccionar el genero de la canción que deseas buscar y igual que en las anteriores input si seleccionas una opción se mantiene y no se borra, 
        la opción todos esta seleccionada de base -->
        <label for="genero">Género musical: </label>
        <select name="genero">
            <option value="Todos" selected>Todos</option>
            <option value="Blues" <?php if (isset($_POST['genero']) && $_POST['genero'] == 'Blues') print 'selected' ?>>Blues</option>
            <option value="Jazz" <?php if (isset($_POST['genero']) && $_POST['genero'] == 'Jazz') print 'selected' ?>>Jazz</option>
            <option value="Pop" <?php if (isset($_POST['genero']) && $_POST['genero'] == 'Pop') print 'selected' ?>>Pop</option>
            <option value="Rock" <?php if (isset($_POST['genero']) && $_POST['genero'] == 'Rock') print 'selected' ?>>Rock</option>
        </select>

        <br><br>
        <!-- Input para enviar dos datos del formulario -->
        <input type="submit" value="Buscar">

        <br><br>
    </form>
    <!-- Fichero que realiza la busqueda y muestra una tabla de las canciónes que cumplan los requisitos -->
    <?php
    require "canciones.inc.php"
    ?>
</body>

</html>