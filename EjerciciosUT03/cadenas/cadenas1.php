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
    echo ('<br>');
    // 3 Muestra la longuitud de la variaple
    print 'La longuitud de la variable es: '.strlen($nombre) . "<br>";
    echo ('<br>');
    // 4 Trasforma la variable a mayuscula
    print 'Variable en mayuscula: '.strtoupper($nombre) . "<br>";
    echo ('<br>');
    // 5 Trasforma la variable a minuscula
    print 'Variable en minuscula: '.strtolower($nombre) . "<br>";
    echo ('<br>');
    // 6 Muestra el numero de veces que aparece la letra a
    print 'La cantidad de veces que aparece a son: '.substr_count($nombre, strtoupper('a')) . "<br>";
    echo ('<br>');
    // 7 Muestra el codigo ASCIi de la primera letra
    print 'El codigo ascii de la primera letra es: '.ord($nombre) . "<br>";
    echo ('<br>');
    // 8 Muestra la posición de la primera a
    if(strpos($nombre, 'a') != ''){
        print 'La primera a ocupa la posición: '.strpos($nombre, 'a');
    }else{
        print (-1).' No contiene ninguna a';
    };
    echo ('<br><br>');
    
    // 9 Lo mismo que el 8 pero con la ultima
    if(strrpos($nombre, 'a') != ''){
        print 'La ultima a ocupa la posición: '.strrpos($nombre, 'a');
    }else{
        print (-1).' No contiene ninguna a';
    };
    echo ('<br><br>');
    // 10 Sustituye las letras a por 0
    print 'Variable remplazando las a por 0'.str_ireplace('a', 0, $nombre) . "<br>";
    // 11 Indica si el nombre empieza por al o no
    if (str_starts_with($nombre, 'al') == true) {
        print 'El nombre empieza por al' . "<br>";
    } else {
        print 'El nombre no empieza por al' . "<br>";
    }
    echo ('<br>');
    // 12 Elimina los espacios al principio y al final 
    print trim(rtrim($nombre)) . "<br>";
    echo ('<br>');
    // 13 Muestra la variable con la primera letra en mayuscula y las demas en minuscula
    print 'Variable con la primera mayuscula y las demas en minuscula'.ucfirst(strtolower($nombre));
    ?>
</body>

</html>