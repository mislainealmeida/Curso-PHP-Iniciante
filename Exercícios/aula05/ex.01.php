<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Operacoes Aritmeticas</title>
    <link rel="stylesheet" href="estilo\style.css">
</head>
<body>
    <div>
        <?php
        $n1=3;
        $n2=2;
        $soma= $n1+$n2;
    

        echo "A soma entre $n1 e $n2 é igual $soma";
        
        echo "<br/>A subtração entre $n1 e $n2 é igual a ". ($n1-$n2);
        echo "<br/>A multiplicação entre $n1 e $n2 é igual a ". ($n1*$n2);
        echo "<br/>A divisão entre $n1 e $n2 é igual a ". ($n1/$n2);
        echo "<br/>O módulo entre $n1 e $n2 é igual a ". ($n1%$n2);
        echo "<br/>A média entre $n1 e $n2 é igual a ". (($n1+$n2)/2);
        ?>
    </div>
    
</body>
</html>