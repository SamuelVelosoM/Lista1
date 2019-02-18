<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <link href="olaMundo.css" rel="stylesheet">
        <title>Questão2</title>
    </head>
    <body>
        <?php
            $salario = 1100;
            $bonus1 = $salario+($salario*0.4);
            $bonus2 = $salario+($salario*0.3);
            
            if ($salario<1000){
                echo "seu novo salario é: ".$bonus1;
            }
            else{
                echo "seu novo salario é: ".$bonus2;
            }
            
        ?>
    </body>
</html>
