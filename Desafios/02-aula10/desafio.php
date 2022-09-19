<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Desafio 02</title>
    <link rel="stylesheet" href="estilo/style.css">
</head>
<body>
    <div>
        <?php
            $estado = isset($_GET["estado"]) ? $_GET["estado"] : 0;
            switch ($estado) {
                case "ac":
                case "ap":
                case "am":
                case "pa":
                case "pb":
                case "ro":  
                case "rr":  
                case "to":            
                    $regiao = "Norte";
                    break;

                case "al":
                case "ba":
                case "ce":
                case "ma":
                case "pe":
                case "pi":
                case "rn":
                case "se":
                    $regiao = "Nordeste";
                    break;
              
                case "df":
                case "go":
                case "mt":
                case "ms":
                    $regiao = "Centro-Oeste";
                    break;

                case "es":
                case "mg":
                case "rj":
                case "sp":
                    $regiao = "Sudeste";
                    break;
     
                case "pr":
                case "rs":
                case "sc":
                    $regiao = "Sul";
                    break;
    
                default:
                    $regiao = "Invalida";
            }
        echo "Você mora na <span class='foco'>Região $regiao</span>";
        ?>
    </div>
<br/>
<a href="desafio.html">Voltar</a>

    
</body>
</html>