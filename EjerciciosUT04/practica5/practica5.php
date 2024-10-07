<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="author" content="Miguel Ángel Fernádez Sánchez">
    <title>Tema4-Ejercicio practica5</title>
</head>
<body>
    <form action=<?=$_SERVER['PHP_SELF']?> method="post">
        <h1>Búsqueda de canciones</h1>

        <label for="texto">Texto a buscar: </label>
        <input type="text" name="texto" value="<?php if (isset($_POST['texto'])) echo $_POST['texto']?>">

        <br><br>

        <label for="buscar">Buscar en: </label>

        <input type="radio" name="radio1" value="titulo" <?php if(isset($_POST['radio1']) && $_POST['radio1'] == 'titulo') print 'checked'?>>
        <label for="titulo">Título de canción</label>

        <input type="radio" name="radio1" value="album" <?php if(isset($_POST['radio1']) && $_POST['radio1'] == 'album') print 'checked'?>>
        <label for="album">Nombres de álbum</label>

        <input type="radio" name="radio1" value="ambos" <?php if(isset($_POST['radio1']) &&  $_POST['radio1'] == 'ambos') print 'checked'?>>
        <label for="ambos">Ambos campos</label>

        <br><br>

        <label for="genero">Género musical: </label>
        <select name="genero">
            <option value="Todos" selected>Todos</option>
            <option value="Blues" <?php if(isset($_POST['genero']) && $_POST['genero'] == 'Blues') print 'selected'?>>Blues</option>
            <option value="Jazz" <?php if(isset($_POST['genero']) && $_POST['genero'] == 'Jazz') print 'selected'?>>Jazz</option>
            <option value="Pop" <?php if(isset($_POST['genero']) && $_POST['genero'] == 'Pop') print 'selected'?>>Pop</option>
            <option value="Rock" <?php if(isset($_POST['genero']) && $_POST['genero'] == 'Rock') print 'selected'?>>Rock</option>
        </select>

        <br><br>

        <input type="submit" value="Buscar">

        <br><br>
    </form>
    
    <?php
        require "canciones.inc.php"
    ?>
</body>
</html>