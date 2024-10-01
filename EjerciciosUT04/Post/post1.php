<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="author" content="Miguel Ángel Fernández Sánchez">
    <title>Post 1</title>
</head>

<body>
    <form action="<?= $_SERVER['PHP_SELF'] ?>" method="post">
        <select name="ciudad" id="ciudad">
            <option value="America/Lima">Lima, Perú</option>
            <option value="America/Mexico_City">Mexico_City, Mexico</option>
            <option value="America/New_York">Nueva York, Estados Unidos</option>
            <option value="Europe/Rome">Roma, Italia</option>
        </select>
        <input type="submit" value="Enviar">
    </form>

    <?php
    echo '<br>';
    if ($_SERVER['REQUEST_METHOD'] == 'POST') {
        print 'Hora de ' . $_POST['ciudad'] . '<br>';
        $zona = new DateTimeZone($_POST['ciudad']);
        $fecha = new DateTime('now', $zona);
        print 'Fecha actual es: ' . $fecha->format('d-m-y') . '<br>';
        print 'Hora actual es :' . $fecha->format('h:m:s') . '<br>';
    }
    ?>
</body>

</html>