<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Integrando HTML + PHP</title>
    <link rel="stylesheet" href="estilo/style.css">
</head>
<body>
    <div>
        <?php
            $valor= $_GET["v"];
            $rq= sqrt($valor);
            echo "A raiz quadrada de $valor é igual a ".number_format($rq,2);
        ?>
        <a href="ex.01.html">Voltar</a>
    </div>
    
</body>
</html>