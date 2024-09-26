<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="author" content="Miguel Ángel Fernández Sánchez">
    <title>Funciones 3</title>
</head>

<body>
    <?php

    // Esta función recoge los dos operandos y el simbolo y muestra por pantalla el resultado
    $anonima = function ($op1, $sim, $op2) {

        $frag = $op1 . ' ' . $sim . ' ' . $op2 . ' = ';

        switch ($sim) {
            case '+':
                return 'Suma: ' . $frag . $op1 + $op2;
                break;

            case '-':
                return 'Resta: ' . $frag . $op1 - $op2;
                break;

            case '*':
                return 'Multiplicación: ' . $frag . $op1 * $op2;
                break;

            case '/':
                return 'División: ' . $frag . $op1 / $op2;
                break;
            default:
                return 'Error';
                break;
        }
    };

    // Esta fución llama a la función anonima para realizar los calculos
    function operaciones($anonima, $operando1, $simbolo, $operando2)
    {
        print $anonima($operando1, $simbolo, $operando2) . '<br>';
    }

    // Llamada a la función operaciones
    operaciones($anonima, 10, '+', 10);
    operaciones($anonima, 20, '-', 10);
    operaciones($anonima, 10, '*', 5);
    operaciones($anonima, 100, '/', 4);
    ?>
</body>

</html>