<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <link href="olaMundo.css" rel="stylesheet">
        <title>Questao8</title>
    </head>
    <body>
        <?php
            $idade=10;
            $p_cinema=30;

            $meia = $p_cinema/2;
            
            if ($idade < 18 or $idade>60){
                echo "Preço = R$".$meia; 
            }
            else {
                echo "Preço = R$".$p_cinema;
            }
            
        ?>
    </body>
</html>
