<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <link href="olaMundo.css" rel="stylesheet">
        <title>Questao9</title>
    </head>
    <body>
        <?php
        $cont=-1;
        
        for ($i=1;$i<11;$i++){
            for ($j=1;$j<11;$j++){
                $cont++;
                
                $matriz[$i][$j] = $i*$j;
                
                if ($cont%10==0){
                    print ("<h3>Tabuada do ".(($cont/10)+1)."</h3></br>");                
                }
                print (" ".$i."X".$j."= ".$matriz[$i][$j]."|");
            }
            print ("</br>");
        }
            
            
        ?>
    </body>
</html>
