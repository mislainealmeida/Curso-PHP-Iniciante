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
           $txt= "Curso em Vídeo"; 
           $tamanho= strlen($txt);

           echo "$tamanho"; 
           /*O acento também conta como caractere.
           Ex video= 5 letras.*/        
        ?>
    </div>
</body>
</html>