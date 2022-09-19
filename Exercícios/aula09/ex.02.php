<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Condicional</title>
    <link rel="stylesheet" href="estilo/style.css">
</head>
<body>
    <div>
        <?php
        $a=isset($_GET["ano"])?$_GET["ano"]:1900;
        $idade=date("Y") - $a;

        if($idade<16){
            $tipoVoto="não pode votar.";
        } elseif ($idade>=18 && $idade <64){
            $tipoVoto="voto obrigatório";
        } else{
            $tipoVoto="voto opcional";
        }
        echo "Para essa idade, $tipoVoto";
        ?>
    </div>    
</body>
</html>