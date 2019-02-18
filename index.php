<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <link href="olaMundo.css" rel="stylesheet">
        <title>Questao1</title>
    </head>
    <body>
        <?php
            $n1=10;
            $n2=4;
            $n3=8;
            $n4=6;
            $media = ($n1+$n2+$n3+$n4)/4;
            
            if ($media >= 6){
                echo "aprovado"; 
            }
            else {
                echo "reprovado";
            }
            
        ?>
    </body>
</html>
