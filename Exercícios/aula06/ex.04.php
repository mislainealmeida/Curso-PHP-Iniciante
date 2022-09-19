<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Operadores de atribuição</title>
    <link rel="stylesheet" href="estilo\style.css">
</head>
<body>
    <div>
        <?php
            $preco= $_GET["p"];
            echo "O preço do produto é R$ $preco.";
            //$preco = $preco + (($preco*10)/100);
            //posso fazer tbm  por operadores de atribuição. O resultado será o mesmo. 
            $preco += ($preco*10)/100;
            echo "<br/>O novo preço com 10% de aumento será R$ $preco.";

            $preco += ($preco*1)/100;
            echo "<br/>O novo preço com desconto de 10% será R$ ".number_format($preco,2,",").".";           

            
        ?>
    </div>
</body>
</html>