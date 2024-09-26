<?php
$nombre = "anaMArial"
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="author" content="Miguel Ángel Fernández Sánchez">
    <title>Cadenas1</title>
</head>

<body>
    <?php
    // 2
    print $nombre . "<br>";
    // 3
    print strlen($nombre) . "<br>";
    // 4
    print strtoupper($nombre) . "<br>";
    // 5
    print strtolower($nombre) . "<br>";
    // 6
    print substr_count($nombre, strtoupper('a')) . "<br>";
    // 7
    print ord($nombre) . "<br>";
    // 8
    print strpos($nombre, 'a') . "<br>";
    // 9
    print strrpos($nombre, 'a') . "<br>";
    // 19
    print str_ireplace('a', 0, $nombre) . "<br>";
    // 11
    if (str_starts_with($nombre, 'al') == true) {
        print 'El nombre empieza por al' . "<br>";
    } else {
        print 'El nombre no empieza por al' . "<br>";
    }
    // 12
    print trim(rtrim($nombre)) . "<br>";
    // 13
    print ucfirst(strtolower($nombre));
    ?>
</body>

</html>