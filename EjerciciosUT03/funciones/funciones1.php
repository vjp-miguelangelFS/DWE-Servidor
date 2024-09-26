<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="author" content="Miguel Ángel Fernández Sánchez">
    <title>Funciones 1</title>
</head>

<body>
    <?php
    // Esta función recibe como parametro el nombre de la tabla y los datos en un array, creando con con los paramentros una sentencia SQL para insertar una tabla a una base de datos
    function exist($nombreTabla, $arrayAsociativo)
    {
        $valoresSentencia = '';
        foreach ($arrayAsociativo as $valores => $value) {
            $valoresSentencia = $valoresSentencia . '(' . implode(',', $arrayAsociativo[$valores]) . ')';
        };

        return 'INSERT INTO ' . $nombreTabla . ' (nombre,apellido,edad) VALUES (' . $valoresSentencia . ')';
    }
    // Array con los datos para añadir en la sentencia
    $nombresValores = [
        ['Miguel', 'Fernández', 19],
        ['Pepe', 'Sanchez', 22],
        ['Ana', 'Gines', 24],
    ];
    // Llamada a la función 
    print exist('RestauranteAlimentos', $nombresValores);

    ?>
</body>

</html>