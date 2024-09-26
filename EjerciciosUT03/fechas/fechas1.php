<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="author" content="Miguel Ángel Fernández Sánchez">
    <title>Fechas 1</title>
</head>

<body>
    <?php

    // 1 Muestra la fecha y hora actuales con el formato d-m-y h:m:s

    echo 'Ejercicio 1: <br>';
    $fecha = new DateTime('now');
    echo 'Fecha y hora actual: '.$fecha->format('d-m-y h:m:s');
    echo '<br><br>';

    // 2 Muestra el nombre de la zona horaria que se usa por defecto

    echo 'Ejercicio 2: <br>';
    print 'Zona horaria por defecto: '.date_default_timezone_get();
    echo '<br><br>';

    // 3 Muestra la fecha de dentro de 45 dias

    echo 'Ejercicio 3: <br>';
    $fecha->modify('+45 day');
    print 'Fecha dentro de 45 dias: '.$fecha->format('d-m-y h:m:s');
    echo '<br><br>';

    // 4 Muestra el numero de dias que han pasado desde el 1 de enero

    echo 'Ejercicio 4: <br>';
    $pasado = new DateTime('01-01-2024');
    $diferencia = $pasado->diff($fecha);
    print 'Dias transcurridos desde el 1 de enero: '.$diferencia->format('%a Dias de diferencia');
    echo '<br><br>';

    // 5 Muestra la fecha y hora actual de Nueva York

    echo 'Ejercicio 5: <br>';
    $zona = new DateTimeZone('America/New_York');
    $fehcaNy = new DateTime('now', $zona);
    print 'Fecha y hora de Nueva York: '.$fehcaNy->format('d-m-y h:m:s');
    echo '<br><br>';

    // 6 Muestra el dia de la semana que era el 1 de enero de este año

    echo 'Ejercicio 6: <br>';
    print 'Dia de la semana del 1 de enero: '.$pasado->format('D')
    ?>
</body>

</html>