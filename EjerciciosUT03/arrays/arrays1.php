<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="author" content="Miguel Ángel Fernández Sánchez">
    <title>Arrays 1</title>
</head>

<body>
    <?php

    // 1 Array que contiene 4 nombre
    $nombres = ['Miguel', 'Ruben', 'Unai', 'Roberto'];
    // 2 Muestra el numero de elemento que contiene el array

    echo 'Ejercicio 2: <br>';
    echo 'Contiene '.count($nombres).' elementos';
    echo '<br><br>';

    // 3 Separa los nombre del array con un separador

    echo 'Ejercicio 3: <br>';
    print 'Nombres del array: ';
    print_r (implode(' ', $nombres));
    echo '<br><br>';

    // 4 Array ordenado en orden alfabetico
    
    echo 'Ejercicio 4: <br>';
    $ordenado = $nombres;

    sort($ordenado);
    print 'Array ordenado: ';
    foreach ($ordenado as $clave => $valor) {
        echo ' ' . $valor;
    }
    echo '<br><br>';
    // 5 Invertir el array

    echo 'Ejercicio 5: <br>';
    $nombresInvertido = array_reverse($nombres);
    print 'Array invertido: ';
    print_r($nombresInvertido);
    echo '<br><br>';
    // 6 Muestra la posición que tiene mi nombre en el array

    echo 'Ejercicio 6: <br>';
    $nombresBuscar = array_search('Miguel', $nombres);

    echo 'El nombre Miguel esta en la posición: ' . $nombresBuscar;
    echo '<br><br>';

    // 7 Array ordenado de forma aleatoria

    echo 'Ejercicio 7: <br>';
    $arrayDesordenado = $nombres;
    shuffle($arrayDesordenado);

    print 'Array ordenado aleatoriamente: ';
    print_r($arrayDesordenado);
    echo '<br><br>';

    // 8 Muestra los alumnos que contengan una a

    echo 'Ejercicio 8: <br>';
    $ContengaA = preg_grep('[a]', $nombres);
    print 'Alumnos que contienen una a: ';
    print_r($ContengaA);
    echo '<br><br>';

    // 9 Array que contenga arrays

    echo 'Ejercicio 9: <br>';
    $alumnos = [array('id' => 1, 'nombre' => 'Miguel', 'Edad' => 19), array('id' => 2, 'nombre' => 'Roberto', 'Edad' => 19), array('id' => 3, 'nombre' => 'Unai', 'Edad' => 20)];

    print_r($alumnos);
    echo '<br><br>';

    // 11 Array indexado

    echo 'Ejercicio 11: <br>';
    print 'Array que contiene solo los nombres de los alumnos: ';
    foreach ($alumnos as $key => $value) {
        $arrayIndexado[$key] = $alumnos[$key]['nombre'];
    }

    print_r($arrayIndexado);

    echo '<br><br>';

    //12 Suma todos los numeros de una array

    echo 'Ejercicio 12: <br>';
    $nums = array(10, 5, 4, 7, 12, 16, 19, 2, 1, 43);
    print 'Array sumado: ';
    print(array_sum($nums))
    ?>
    <!-- 10 Crea una tabla que muestre los datos de los alumnos -->
    <p>Ejercicio 10</p>

    <table border="1">
        <tr>
            <td>Key</td>
            <?php
            foreach ($nombres as $clave => $nombress) {
                echo "<td>$clave</td>";
            }
            ?>
        </tr>
        <tr>
            <td>Nombre</td>
            <?php
            foreach ($nombres as $clave => $nombress) {
                echo "<td>$nombress</td>";
            }
            ?>
        </tr>
    </table>
</body>

</html>