<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Arrays 2</title>
</head>
<body>
    <?php
    $array = [
        array('pais' => 'Alemania','capital'=>'Berlín','extension'=>557046,'habitantes'=>78420000),
        array('pais' => 'Austria','capital'=>'Viena','extension'=>83849,'habitantes'=>7614000),
        array('pais' => 'Belgica','capital'=>'Bruselas','extension'=>30518,'habitantes'=>9932000)
    ];

    
    ?>

    <table border="1">
        <tr>
            <td>País</td>
            <td>Capital</td>
            <td>Extensión</td>
            <td>Habitantes</td>
        </tr>
        <?php
            foreach ($array as $key) {
                echo '<tr>';
                foreach ($key as $key1 => $value1) {
                    
                    print '<td>'. $value1.'</td>';
                    
                }
                echo '</tr>';
            }
        ?>
    </table>
</body>
</html>