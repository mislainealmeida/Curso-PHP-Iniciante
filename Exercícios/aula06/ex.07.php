<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Variáveis de variáveis</title>
    <link rel="stylesheet" href="estilo\style.css">
</head>
<body>
    <div>
        <?php
            $x="abc";
            $$x="def";
            echo "O conteúdo da variável X é $x";
            Echo "<br/>A variável ABC criada recebeu o valor é $abc";
        ?>
    </div>
    
</body>
</html>