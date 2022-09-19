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
       $nome= "Mislaine Almeida";
       echo "Seu nome é ".strtolower($nome);

       $nome= "Mislaine Almeida";
       echo "<br/>Seu nome é ".strtoupper($nome);
    
       $nome= "mislaine almeida";
       echo "<br/>Seu nome é ".ucfirst($nome);

       $nome= "mislaine almeida";
       echo "<br/>Seu nome é ".ucwords($nome);

        ?>
    </div>
</body>
</html>