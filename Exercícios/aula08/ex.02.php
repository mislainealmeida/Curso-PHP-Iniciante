<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="estilo/style.css">
    <title>Document</title>
</head>
<body>
    <div>
        <?php
            $nome=isset($_GET["nome"])? $_GET["nome"]: "[não informado]";
            $ano=isset($_GET["ano"])? $_GET["ano"]: 0;
            $sexo=isset($_GET["sexo"])? $_GET["sexo"]: "[sem sexo]";
            $idade= date("Y") - $ano; //date traz a data anual Y traz o ano com 4 dígitos(2022) e y traz o ano com 2 dígitos(22). 
            echo "$nome, $sexo e tem $idade anos.";
        ?>

        <a href="ex.02.html">Voltar</a>


    </div>
    
</body>
</html>