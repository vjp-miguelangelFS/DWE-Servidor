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
    // 1 Crea una variable que contega el nombre anaMArial
    $nombre = "anaMArial";
    // 2 Muestra la variable
    print $nombre . "<br>";
    // 3 Muestra la longuitud de la variaple
    print strlen($nombre) . "<br>";
    // 4 Trasforma la variable a mayuscula
    print strtoupper($nombre) . "<br>";
    // 5 Trasforma la variable a minuscula
    print strtolower($nombre) . "<br>";
    // 6 Muestra el numero de veces que aparece la letra a
    print substr_count($nombre, strtoupper('a')) . "<br>";
    // 7 Muestra el codigo ASCIi de la primera letra
    print ord($nombre) . "<br>";
    // 8 Muestra la posición de la primera a
    if(strpos($nombre, 'a') != ''){
        print strpos($nombre, 'a');
    }else{
        print (-1);
    };
    echo ('<br>');
    // 9 Lo mismo que el 8 pero con la ultima
    print strrpos($nombre, 'a') . "<br>";
    // 10 Sustituye las letras a por 0
    print str_ireplace('a', 0, $nombre) . "<br>";
    // 11 Indica si el nombre empieza por al o no
    if (str_starts_with($nombre, 'al') == true) {
        print 'El nombre empieza por al' . "<br>";
    } else {
        print 'El nombre no empieza por al' . "<br>";
    }
    // 12 Elimina los espacios al principio y al final 
    print trim(rtrim($nombre)) . "<br>";
    // 13 Muestra la variable con la primera letra en mayuscula y las demas en minuscula
    print ucfirst(strtolower($nombre));
    ?>
</body>

</html>