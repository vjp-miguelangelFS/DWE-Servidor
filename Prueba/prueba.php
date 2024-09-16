<?php
$saludo = 'Hola ';

// if (isset ($_GET['id'])){
//$nombre = $_GET['id'];
//}else {
//    $nombre = 'Anónimo' ;
//}

$nombre = $_GET['id'] ?? 'Anónimo';

echo $saludo . $nombre;
?>