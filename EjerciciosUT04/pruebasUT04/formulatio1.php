<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulario</title>
</head>
<body>
    <form action="<?= $_SERVER['PHP_SELF'] ?>" method="post">
        <table>
            <tr>
                <td><label for="fechaNacimiento">Fecha de nacimiento:</label></td>
                <td><input type="date" name="fechaNacimiento"></td>
            </tr>
            <tr>
                <td><label for="email">Email:</label></td>
                <td><input type="email" name="email"></td>
            </tr>
            <tr>
                <td><label for="observaciones">Observaciones:</label><br></td>
                <td><textarea name="observaciones" id="observaciones" rows="7" cols="25"></textarea></td>
            </tr>
            <tr>
                <td colspan="2" align="center"><input type="submit" value="Enviar"></td>
            </tr>
        </table>
    </form>
    <?php
        if($_SERVER['REQUEST_METHOD'] == 'POST'){
            echo "<br>Fecha: ".$_POST['fechaNacimiento']." Email: ".$_POST['email']." Observaciones: ".$_POST['observaciones'];
        }
    ?>
</body>
</html>