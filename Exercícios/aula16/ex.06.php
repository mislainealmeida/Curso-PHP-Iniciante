<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Funções Strings</title>
    <link rel="stylesheet" href="estilo/style.css">k
</head>
<body>
    <div>
        <?php
            $frase= "Eu vou estudar PHP agora."; 
            
        
            $cont1= str_word_count($frase,1);
            $cont= str_word_count($frase,0);
            $cont2= str_word_count($frase,2);

            print_r($cont1); 
            echo "<br/>$cont<br/>"; 
            print_r($cont2); 
            /*O zero irá contar as palavras.
            O um irá gerar um vetor com as palavras. 
            O dois irá gerar um vetor mas mantendo o posicionamento das palvras dentro da string. */

            
        ?>
    </div>
</body>
</html>