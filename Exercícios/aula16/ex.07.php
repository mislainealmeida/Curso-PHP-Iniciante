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
           $site="Curso em Vídeo";
           $vetor = explode(" ", $site);
           print_r($vetor);
           //O espaço em branco dentro de aspas em explode é o caractere que eu escolhi para ser o local onde terá a explosão, onde será criado o vetor. 
           $nome= "Maria";
           $vetor1= str_split($nome);
           print_r($vetor1);
           /*Enquanto o explode coloca cada palavra no índice, o str_split coloca cada letra em um índice.*/ 
        ?>
    </div>
</body>
</html>