<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <link href="olaMundo.css" rel="stylesheet">
        <title>Questão7</title>
    </head>
    <body>
        <br/><?php
       
       $n1=7;
       $n2=6;
       
        if ($n1==$n2){
            print ("Os números são iguais!<br/>");
            print ($n1."=".$n2);
        }
        elseif ($n1<$n2){
            print ("O primeiro número é menor que o segundo!<br/>");
            print ($n1."<".$n2);
        }
        elseif ($n1>$n2){
            print ("O primeiro número é maior que o segundo!<br/>");
            print ($n1.">".$n2);
        }
            
       ?>
    </body>
</html>
