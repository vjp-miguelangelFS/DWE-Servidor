<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Funciones 1</title>
</head>
<body>
    <?php
        function exist($nombreTabla,$arrayAsociativo){

            return 'INSERT INTO '.$nombreTabla.' ('. implode(',',$arrayAsociativo) .') VALUES ('. implode(',',array_keys($arrayAsociativo)) .')';
        }

        $nombresValores = [10=> 'Carne',15=>'Pescado',20=>'Verdura'];

        print exist('RestauranteAlimentos',$nombresValores);

    ?>
</body>
</html>