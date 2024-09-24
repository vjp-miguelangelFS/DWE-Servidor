<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Arrays 1</title>
</head>
<body>
    <?php

        // 1
        $nombre = ['Miguel','Ruben','Unai','Roberto'];
        // 2

        echo 'Ejercicio 2: <br>';
        echo count($nombre);
        echo '<br>';

        // 3

        echo 'Ejercicio 3: <br>';
        print_r(implode(' ',$nombre));
        echo '<br>';

        // 4

        echo 'Ejercicio 4: <br>';
        $ordenado = $nombre;

        sort($ordenado);

        foreach ($ordenado as $clave => $valor){
            echo ' ' . $valor;
        }
        echo '<br>';
        // 5

        echo 'Ejercicio 5: <br>';
        $nombreInvertido = array_reverse($nombre);
        print_r($nombreInvertido);
        echo '<br>';
        // 6

        echo 'Ejercicio 6: <br>';
        $nombreBuscar = array_search('Miguel',$nombre);

        echo 'El nombre Miguel esta en la posición: '.$nombreBuscar;
        echo '<br>';

        // 7

        echo 'Ejercicio 7: <br>';
        $arrayDesordenado = $nombre;
        shuffle($arrayDesordenado);

        print_r($arrayDesordenado);
        echo '<br>';

        // 8

        echo 'Ejercicio 8: <br>';
        $ContengaA = preg_grep('[a]',$nombre);

        print_r($ContengaA);
        echo '<br>';

        // 9

        echo 'Ejercicio 9: <br>';
        $alumnos = [array('id'=> 1,'nombre'=> 'Miguel','Edad'=>19),array('id'=> 2,'nombre'=> 'Roberto','Edad'=>19),array('id'=> 3,'nombre'=> 'Unai','Edad'=>20)];

        print_r($alumnos);
        echo '<br>';

        // 11
        
        echo 'Ejercicio 11: <br>';
        foreach ($alumnos as $key => $value) {
            $arrayIndexado[$key] = $alumnos[$key]['nombre'];
        }

        print_r($arrayIndexado);

        echo '<br>';

        //12

        echo 'Ejercicio 12: <br>';
        $nums = array(10,5,4,7,12,16,19,2,1,43);
        print (array_sum($nums))
    ?>
    <!-- 10 -->
        <p>Ejercicio 10</p>

     <table border="1">
        <tr>
            <td>Key</td>
            <?php
                foreach($nombre as $clave => $nombres){
                    echo "<td>$clave</td>";
                }
            ?>
        </tr>
        <tr>
            <td>Nombre</td>
            <?php
                foreach($nombre as $clave => $nombres){
                    echo "<td>$nombres</td>";
                }
            ?>
        </tr>
     </table>
</body>
</html>