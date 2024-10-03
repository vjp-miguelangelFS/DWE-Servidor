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

        <input type="radio" name="radio1" value="titulo" required>
        <label for="titulo">Título de canción</label>

        <input type="radio" name="radio1" value="album">
        <label for="album">Nombres de álbum</label>

        <input type="radio" name="radio1" value="ambos">
        <label for="ambos">Ambos campos</label>

        <br><br>

        <label for="genero">Género musical: </label>
        <select name="genero">
            <option value="Todos" selected>Todos</option>
            <option value="Blues">Blues</option>
            <option value="Jazz">Jazz</option>
            <option value="Pop">Pop</option>
            <option value="Rock">Rock</option>
        </select>

        <br><br>

        <input type="submit" value="Buscar">

        <br><br>
    </form>
</body>
</html>