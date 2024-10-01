<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="author" content="Miguel Ángel Fernández Sánchez">
    <title>Post 3</title>
</head>

<body>
    <form action=<?= $_SERVER['PHP_SELF'] ?> method="post">
        <label for="fecha">Fecha: </label>
        <input type="date" name="fecha">

        <label for="numDias">Número de días: </label>
        <input type="number" name="numDias">

        <input type="submit" value="Calcular">
    </form>

    <?php
    echo '<br>';
    if ($_SERVER['REQUEST_METHOD'] == 'POST') {
        print 'La fecha selecionada es: ' . $_POST['fecha'] . '<br>';
        print 'Días ingresados: ' . $_POST['numDias'] . '<br>';

        $fecha = new DateTime($_POST['fecha']);
        $fecha->modify('+ ' . $_POST['numDias'] . ' day');

        print 'La fecha resultante es: ' . $fecha->format('Y-m-d');
    }
    ?>
</body>

</html>