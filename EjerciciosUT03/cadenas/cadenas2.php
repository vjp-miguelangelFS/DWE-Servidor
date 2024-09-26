<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="author" content="Miguel Ángel Fernández Sánchez">
    <title>Cadenas 2</title>
</head>

<body>
    <?php
    // 1 Muestra el valor de un parametro llamado name
    $name = $_GET['name'] ?? 'Miguel';
    $name = trim($name, '/');
    print 'Nombre introducido por parametro: '.$name;
    echo "<br><br>";

    // 2 Muestra la longuitud del parametro name

    print 'Longuitud del parametro name: '.strlen($name);
    echo "<br><br>";

    // 3 Muestra el parametro name en mayuscula

    print 'Parametro no en mayuscula: '.strtoupper($name);
    echo "<br><br>";

    // 4 Muestra el parametro name en minuscula

    print 'Parametro no en minuscula: '.strtolower($name);
    echo "<br><br>";

    // 5 Muestra si el nombre empieza por el prefijo introducido por parametro

    $prefix = $_GET['prefix'] ?? null;
    if($prefix != null){
        if (strpos($name, $prefix) === 0) {
            echo 'El nombre empieza por el prefijo introducido';
        } else {
            echo 'El nombre no empieza por el prefijo introducido';
        }
    }else{
        print 'No se ha paso el parametro';
    }
    
    echo '<br><br>';
    // 6 Muestra el numero de veces que aparece la letra e

    print 'Numero de veces que aparece la letra e son: '.substr_count(strtolower($name), "e");
    echo '<br><br>';

    // 7 Muestra la posición de la primera a

    if (strpos($name, 'a')) {
        print 'Posición de la primera a: '.strpos($name, 'a');
    } else {
        echo 'En este texto no hay ninguna a';
    }
    echo '<br><br>';
    // 8 Muestra el parametro name sustituyendo las letras o por 0

    print 'Parametro name sustituyendo la letra o por 0'.str_ireplace('o', 0, $name)
    ?>

</body>

</html>