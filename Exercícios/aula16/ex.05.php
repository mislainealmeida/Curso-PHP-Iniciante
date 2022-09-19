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
        $nome="  José da Silva   ";
        $tam= strlen($nome);
        echo "$nome tem $tam caracteres";
        $novo= trim($nome);
        $tamN= strlen($novo);
        echo "<br/> $novo tem $tamN caracteres."
        /*isso pq o trim exclui os espaços do início e fim na contagem dos caracteres.
        
        ltrim elimina os espaços iniciais na contagem.
        
        rtrim elimina os espaços finais na contagem.*/
        
        ?>
    </div>
</body>
</html>