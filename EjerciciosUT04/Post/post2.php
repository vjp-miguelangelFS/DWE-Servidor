<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="author" content="Miguel Ángel Fernández Sánchez">
    <title>Post 2</title>
</head>

<body>
    <form action=<?= $_SERVER['PHP_SELF'] ?> method="post">
        <label for="frase">Ingresa una frase: </label>
        <input type="text" name="frase">
        <label for="buscarPalabra">Buscar la palabra: </label>
        <input type="text" name="buscarPalabra">
        <input type="submit" value="Comprobar">
    </form>

    <?php
    echo '<br>';
    if ($_SERVER['REQUEST_METHOD'] == 'POST') {
        print 'La frase: ' . $_POST['frase'] . '<br>';
        if (strpos($_POST['frase'], $_POST['buscarPalabra']) !== false) {
            print 'Contiene la palabra ' . $_POST['buscarPalabra'];
        } else {
            print 'No contiene la palabra ' . $_POST['buscarPalabra'];
        }
    }
    ?>
</body>

</html>