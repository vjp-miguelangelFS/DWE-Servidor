<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pagina web 1</title>
</head>
<body>
    <?php
        $nombre = $_GET['nombre']??'XX';
        $ciudad = $_GET['ciudad']??'XX';
        $edad = $_GET['edad']??'XX';

        echo "Hola soy $nombre, tengo $edad años y vivo en la ciudad de $ciudad";
        
    ?>

</body>
</html>