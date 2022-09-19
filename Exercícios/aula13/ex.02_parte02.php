<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Repetições</title>
    <link rel="stylesheet" href="estilo/style.css">
</head>
<body>
    <div>
        <?php
           $num= isset($_GET["num"])? $_GET["num"] : 1;
           echo "<h2>Tabela de número $num<h2/>";
           for($i=1; $i<=10; $i++){
                $res= $num * $i;
                echo "$num x $i = $res<br/>";
           }         
        ?>
        <br/>
        <!--<a href="ex.02_parte01.php"><input type="button" value="Voltar"></a>-->
        <a href="javascript:history.go(-1)">Voltar</a>
    </div>
</body>
</html>