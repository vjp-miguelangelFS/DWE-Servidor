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
        $fecha = new DateTime('now');
        echo $fecha -> format( 'd-m-y h:m:s');
        echo '<br>';
    
    // 2   
        print date_default_timezone_get();
        echo '<br>';

    // 3
        $fecha ->modify('+45 day');
        print $fecha -> format( 'd-m-y h:m:s');
        echo '<br>';
    
    // 4
        $pasado = new DateTime('01-01-2024');
        $diferencia = $pasado->diff($fecha);
        print $diferencia -> format('%R%a Dias de diferencia');
        echo '<br>';

    // 5
        $zona = new DateTimeZone('America/New_York');
        $fehcaNy = new DateTime('now',$zona);
        print $fehcaNy -> format('d-m-y h:m:s');
        echo '<br>';

    // 6
        print $pasado -> format('D')
    ?>
</body>
</html>