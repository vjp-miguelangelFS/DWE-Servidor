<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Funciones 1</title>
</head>

<body>
    <?php
    function exist($nombreTabla, $arrayAsociativo)
    {
        $fragmento = '';
        foreach ($arrayAsociativo as $valores => $value) {
            $fragmento = $fragmento . '(' . implode(',', $arrayAsociativo[$valores]) . ')';
        };

        return 'INSERT INTO ' . $nombreTabla . ' (nombre,apellido,edad) VALUES (' . $fragmento . ')';
    }

    $nombresValores = [
        ['Miguel', 'Fernández', 19],
        ['Pepe', 'Sanchez', 22],
        ['Ana', 'Gines', 24],
    ];

    print exist('RestauranteAlimentos', $nombresValores);

    ?>
</body>

</html>