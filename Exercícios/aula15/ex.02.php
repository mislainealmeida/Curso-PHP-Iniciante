<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Rotinas externas</title>
    <link rel="stylesheet" href="estilo/style.css">
</head>
<body>
    <div>
        <?php
            include "script.php";
            echo "<h1>Testando novas funções</h1>";
            ola();
            mostrarValor(4);
            echo "<h2>Finalizando o programa...</h2>";
        ?>
    </div>
</body>
</html>