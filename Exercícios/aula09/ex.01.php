<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Condições</title>
    <link rel="stylesheet" href="estilo/style.css">
</head>
<body>
    <div>
        <?php
            $a=isset($_GET["ano"])?$_GET["ano"]:1900;
            $i=date("Y") - $a;

            echo"Você nasceu em $a e terá $i anos.<br/>";

            if($i>=18){
                $voto= "já pode votar";
                $dirigir="já pode dirigir";
            } else{
                $voto= "NÃO pode votar";
                $dirigir="NÃO pode dirigir";
            }
            echo "Com essa idade você $voto e também $dirigir.";
        ?>
    </div>
</body>
</html>