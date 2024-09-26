<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="author" content="Miguel Ángel Fernández Sánchez">
    <title>Funciones 2</title>
</head>

<body>
    <?php
    $sentencia_sql = "insert into tabla (campos) values (valores)";

    // Recibe como parametro el nombre de la tabla, el array que contiene los valores y la sentenciaSQL pasado por referencia,
    // posteriormente se modifica la sentenciaSQL.
    function insert($nombreTabla, $array, &$sentencia_sql)
    {

        $fragmento = '';
        foreach ($array as $valores => $value) {
            $fragmento = $fragmento . '(' . implode(',', $array[$valores]) . ')';
        };

        $sentencia_sql = str_replace('tabla', $nombreTabla, $sentencia_sql);

        $sentencia_sql = str_replace('campos', 'nombre,apellido,edad', $sentencia_sql);

        $sentencia_sql = str_replace('valores', $fragmento, $sentencia_sql);

        return $sentencia_sql;
    }
    // Array con los datos para añadir a la tabla
    $nombresValores = [
        ['Miguel', 'Fernández', 19],
        ['Pepe', 'Sanchez', 22],
        ['Ana', 'Gines', 24],
    ];
    // Llamada a la función
    insert('NombreEdad', $nombresValores, $sentencia_sql);
    // Muestra la sentenciaSQL
    echo $sentencia_sql
    ?>
</body>

</html>