<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Desafio 04</title>
    <link rel="stylesheet" href="estilo/style.css">
</head>
<body>
    <div>
        <?php
            $numero= isset($_GET["numero"]) ? $_GET["numero"] : 1;
            echo "<h1>Calculando a tabuada de $numero</h1>";
            $c=1;
            do{
                $res= $numero * $c;
                echo "$numero x $c = $res<br/>";
                $c++;
            }while($c<=10);            
        ?>
        <a href="desafio_parte1.php">Voltar</a>
    </div>
</body>
</html>