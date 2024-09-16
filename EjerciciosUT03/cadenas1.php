<?php
$nombre = 'anaMArial'
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
    ?>
</body>
</html>