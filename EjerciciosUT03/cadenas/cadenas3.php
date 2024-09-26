<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="author" content="Miguel Ángel Fernández Sánchez">
    <title>Cadenas 3</title>
</head>

<body>
    <?php

    $url = 'http://username:password@hostname:9090/path?arg=value#anchor';

    // 1 Protocolo http
    print "1- Protocolo: " . parse_url($url, PHP_URL_SCHEME) . "<br>";
    // 2 Nombre de usuario
    print "2- Username: " . parse_url($url, PHP_URL_USER) . "<br>";
    // 3 Path de la url
    print "3- Path: " . parse_url($url, PHP_URL_PATH) . "<br>";
    // 4 El querystring
    print "4- Querystring: " . parse_url($url, PHP_URL_QUERY) . "<br>";

    ?>
</body>

</html>