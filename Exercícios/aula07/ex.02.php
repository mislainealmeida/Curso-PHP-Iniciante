<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Operador ternário</title>
    <link rel="stylesheet" href="estilo/style.css">
</head>
<body>
    <div>
        <?php
            $nota1=$_GET["n1"];
            $nota2=$_GET["n2"];
            $media= ($nota1+$nota2)/2;
            echo "A média entre $nota1 e $nota2 é igual a $media.";
            $situacao= ($media<6)? "REPROVADO" : "APROVADO";
            echo "<br/>A situação do aluno é $situacao.";
        ?>
    </div>
</body>
</html>