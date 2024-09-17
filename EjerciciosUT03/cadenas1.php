<?php
$nombre = "anaMArial"
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadenas1</title>
</head>
<body>
    <?php 
    print $nombre . "<br>";
    print strlen($nombre) . "<br>";
    print strtoupper($nombre) . "<br>";
    print strtolower($nombre) . "<br>";
    print substr_count($nombre,strtoupper('a')) . "<br>";
    print ord($nombre) . "<br>";

    print strpos($nombre,'a') . "<br>";
    print strrpos($nombre,'a') . "<br>";

    print str_ireplace('a',0,$nombre) . "<br>";

    if(str_starts_with($nombre,'al') == true){
        print 'El nombre empieza por al' . "<br>";
    }else{
        print 'El nombre no empieza por al' . "<br>";
    }

    print trim(rtrim($nombre)) . "<br>";

    print ucfirst(strtolower($nombre));
    ?>
</body>
</html>