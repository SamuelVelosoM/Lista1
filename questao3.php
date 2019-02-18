<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <link href="olaMundo.css" rel="stylesheet">
        <title>Questão3</title>
    </head>
    <body>
        <?php
            
            //media
            $n1=10;
            $n2=10;
            $n3=10;
            $n4=10;
            $media = ($n1+$n2+$n3+$n4)/4;
            
            //faltas
            $aula=200;
            $faltas=200;
            $frequencia_max=$aula*0.75;
            $frequencia_aluno = $aula-$faltas;
            
            
            
            if ($media > 7.5 && $frequencia_aluno>$frequencia_max ){
                echo "aprovado";
            }
            else{
                echo "reprovado";
            }
            
        ?>
    </body>
</html>
