<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Repetição em PHP</title>
    <link rel="stylesheet" href="estilo/style.css">
</head>
<body>
    <div>
        <?php
            $valor=isset($_GET["valor"])?$_GET["valor"]:1;
            echo "<h1>Calculando o Fatorial de $valor</h1><br/>";
            $c=$valor;
            $fat=1;
            do{
                $fat= $fat*$c;
                $c--;
            }while($c>=1);
            echo " <h2>$valor! = $fat</h2>";
        ?>
        <a href="ex.03.html">Voltar</a>
    </div>
</body>
</html>