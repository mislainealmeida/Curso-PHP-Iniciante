<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Desafio 01</title>
    <link rel="stylesheet" href="estilo/style.css">
</head>
<body>
    <div>
        <?php
        $nota1= isset($_GET["nota1"]) ? $_GET["nota1"] : 0;
        $nota2= isset($_GET["nota2"]) ? $_GET["nota2"] : 0;
        $media=($nota1+$nota2)/2;
        echo "A média entre " . number_format($nota1, 1) . " e " . number_format($nota2, 1) . " é igual a " . number_format($media, 1) . "<br/>";       

        if($media<5){
            $situacao="REPROVADO ❌";
        }else if ($media>=7){
            $situacao="APROVADO ✔️";
        } else{
            $situacao="<mark>RECUPERAÇÃO</mark>";
        }
        echo "Situação: $situacao";
        ?>

        <br/><a href="desafio.html"><input type="button" value="Voltar"></a>
    </div>
    
</body>
</html>