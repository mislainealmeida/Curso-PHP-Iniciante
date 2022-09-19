<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Desafio05</title>
    <link rel="stylesheet" href="estilo/style.css">
</head>
<body>
    <div>
       <?php
        
            $num = isset($_GET["numero"]) ? $_GET["numero"] : 1;
            $total = 0;
            echo "<h1>Analisando o número $num</h1>";
		    echo "<h2>Valores múltiplos: </h2>";
            for($i=1; $i<=$num; $i++){
                if(($num%$i)==0){
                    echo "$i ";
                    $total++;
                }
            }
        
            echo "<h3> Total de múltiplos: $total<h3/>";
            echo "<h3> Resultado: $num <span class='foco'>". ($total == 2 ? "É PRIMO!" : "NÃO É PRIMO!") ."</span></h3>";     

        ?>
       <a href="desafio.html"><input type="submit" value="Voltar"></a>
    </div>
</body>
</html>