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
           $vetor[0]= "Curso";
           $vetor[1]= "em";
           $vetor[2]= "Vídeo";
           $texto= implode("#",$vetor);
           print($texto);

           $texto= join("***",$vetor);
           echo "<br/>$texto";
           
           /*Pode usar o join() no lugar de implode, funcionará da mesma maneira, substituindo o caractere que desejar entre os índices do vetor. */

        ?>
    </div>
</body>
</html>