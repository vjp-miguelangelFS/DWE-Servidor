<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Funciones 3</title>
</head>
<body>
    <?php
        $anonima = function($op1,$sim,$op2){

            $frag = $op1 . ' ' .$sim. ' '. $op2. ' = ';
            
            switch($sim){
                case '+':
                    return $frag. $op1+$op2;
                    break;

                case '-':
                    return $frag. $op1-$op2;
                    break;

                case '*':
                    return $frag. $op1*$op2;
                    break;

                case '/':
                    return $frag. $op1/$op2;
                    break;
                default:
                    return 'Error';
                    break;
                
            }
        };


        function operaciones($anonima,$operando1,$simbolo,$operando2){
            print $anonima($operando1,$simbolo,$operando2). '<br>';
        }

        operaciones($anonima,10,'+',10);
        operaciones($anonima,20,'-',10);
        operaciones($anonima,10,'*',5);
        operaciones($anonima,100,'/',4);
    ?>
</body>
</html>