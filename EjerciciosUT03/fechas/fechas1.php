<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Fechas 1</title>
</head>
<body>
    <?php

    // 1

    echo 'Ejercicio 1: <br>';
        $fecha = new DateTime('now');
        echo $fecha -> format( 'd-m-y h:m:s');
        echo '<br>';
    
    // 2   

        echo 'Ejercicio 2: <br>';
        print date_default_timezone_get();
        echo '<br>';

    // 3

        echo 'Ejercicio 3: <br>';
        $fecha ->modify('+45 day');
        print $fecha -> format( 'd-m-y h:m:s');
        echo '<br>';
    
    // 4

        echo 'Ejercicio 4: <br>';
        $pasado = new DateTime('01-01-2024');
        $diferencia = $pasado->diff($fecha);
        print $diferencia -> format('%R%a Dias de diferencia');
        echo '<br>';

    // 5

        echo 'Ejercicio 5: <br>';  
        $zona = new DateTimeZone('America/New_York');
        $fehcaNy = new DateTime('now',$zona);
        print $fehcaNy -> format('d-m-y h:m:s');
        echo '<br>';

    // 6

        echo 'Ejercicio 6: <br>';
        print $pasado -> format('D')
    ?>
</body>
</html>