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

        echo count($nombre);
        echo '<br>';

        // 3

        print_r(implode(' ',$nombre));
        echo '<br>';

        // 4

        $ordenado = $nombre;

        sort($ordenado);

        foreach ($ordenado as $clave => $valor){
            echo ' ' . $valor;
        }
        echo '<br>';
        // 5

        $nombreInvertido = array_reverse($nombre);
        print_r($nombreInvertido);
        echo '<br>';
        // 6

        $nombreBuscar = array_search('Miguel',$nombre);

        echo 'El nombre Miguel esta en la posición: '.$nombreBuscar;
        echo '<br>';

        // 7

        $arrayDesordenado = $nombre;
        shuffle($arrayDesordenado);

        print_r($arrayDesordenado);
        echo '<br>';

        // 8

        $ContengaA = preg_grep('[a]',$nombre);

        print_r($ContengaA);
        echo '<br>';

        // 9

        $alumnos = [array('id'=> 1,'nombre'=> 'Miguel','Edad'=>19),array('id'=> 2,'nombre'=> 'Roberto','Edad'=>19),array('id'=> 3,'nombre'=> 'Unai','Edad'=>20)];

        print_r($alumnos);
        echo '<br>';

        // 11
        
        //12

        $nums = array(10,5,4,7,12,16,19,2,1,43);
        print (array_sum($nums))
    ?>
    <!-- 10 -->
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