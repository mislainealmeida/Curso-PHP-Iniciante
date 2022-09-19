<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Operador ternário</title>
    <link rel="stylesheet" href="estilo\style.css">
</head>
<body>
    <div>
        <?php
            $n1=$_GET["a"];
            $n2=$_GET["b"];
            $tipo= $_GET["op"];
            echo "Os valores passados fora $n1 e $n2.<br/>";
            $r=($tipo =="s") ? $n1+$n2 : $n1*$n2;
            echo "O resultado será $r.<br/>"

            
        ?>
    </div>
</body>
</html>