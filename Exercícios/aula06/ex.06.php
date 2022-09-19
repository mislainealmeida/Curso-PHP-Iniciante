<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Variáveis referenciadas</title>
    <link rel="stylesheet" href="estilo\style.css">
</head>
<body>
    <div>
        <?php
        $a=3;
        $b=$a;
        $b+=5;

        
        echo "<h5>Na variável não referenciada:</h5>";
        echo "A variável A vale $a";
        echo "<br/>A variável B vale $b";

        echo "<h5>Na variável referenciada:</h5>";

        $a=3; 
        $b= &$a; 
        $b+=5;
        echo "A variável A vale $a";
        echo "<br/>A variável B vale $b";


        ?>
    </div>
    
</body>
</html>