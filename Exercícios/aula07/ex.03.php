<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Operadores lógicos</title>
    <link rel="stylesheet" href="estilo/style.css">
</head>
<body>
    <div>
        <?php
            $ano=$_GET["an"];
            $idade = 2022 - $ano;
            echo "Quem nasceu em $ano tem $idade anos.<br/>";
            $tipo= ($idade>=18 && $idade< 65) ? "OBRIGATÓRIO" : "NÃO OBRIGATÓRIO";
            echo "Voto $tipo";
        ?>
    </div>
</body>
</html>