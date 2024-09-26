<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadenas 2</title>
</head>

<body>
    <?php
    // 1
    $name = $_GET['name'] ?? 'Miguel';
    $name = trim($name, '/');
    print $name;
    echo "<br>";

    // 2

    print strlen($name);
    echo "<br>";

    // 3

    print strtoupper($name);
    echo "<br>";

    // 4

    print strtolower($name);
    echo "<br>";

    // 5

    $prefix = $_GET['prefix'];

    if (strpos($name, $prefix) === 0) {
        echo 'El nombre empieza por el prefijo introducido';
    } else {
        echo 'El nombre no empieza por el prefijo introducido';
    }
    echo '<br>';
    // 6

    print substr_count(strtolower($name), "e");
    echo '<br>';

    // 7

    if (strpos($name, 'a')) {
        print strpos($name, 'a');
    } else {
        echo 'En este texto no hay ninguna a';
    }
    echo '<br>';
    // 8

    print str_ireplace('o', 0, $name)
    ?>

</body>

</html>