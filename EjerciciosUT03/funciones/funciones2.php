<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Funciones 2</title>
</head>
<body>
    <?php
    $sentencia_sql = "insert into tabla (campos) values (valores)";

    function insert ($nombreTabla,$array,&$sentencia_sql){

        $sentencia_sql = str_replace('tabla',$nombreTabla,$sentencia_sql);

        $sentencia_sql = str_replace('campos',implode(',',$array),$sentencia_sql);

        $sentencia_sql = str_replace('valores',implode(',',array_keys($array)),$sentencia_sql);

        return $sentencia_sql;
    }

    $nombresValores = [19=> 'Miguel',20=>'Ana',23=>'Pedro'];

    insert('NombreEdad',$nombresValores,$sentencia_sql);

    echo $sentencia_sql
    ?>
</body>
</html>