<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Valores personalizados</title>
    <link rel="stylesheet" href="estilo\style.css">
</head>
<body>
<div>
    <!--coloca no final da url ?a=5&b=8
    Exemplo para este exercício: 
    localhost/cursoVideo/aula05/ex.06.php?a=5&b=8*/-->
        <?php
        $n1=$_GET["a"];
        $n2=$_GET["b"];
        $soma= $n1+$n2;

        echo "<h2> Valores recebidos: $n1 e $n2.</h2>";
        
            echo "<br/>A soma é igual $soma";        
            echo "<br/>A subtração  é igual a ". ($n1-$n2);
            echo "<br/>A multiplicação é igual a ". ($n1*$n2);
            echo "<br/>A divisão é igual a ". ($n1/$n2);
            echo "<br/>O módulo é igual a ". ($n1%$n2);
            echo "<br/>A média é igual a ". (($n1+$n2)/2);
        ?>
</body>
</html>