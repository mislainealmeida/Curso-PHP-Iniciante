<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Repetição em PHP</title>
    <link rel="stylesheet" href="estilo/style.css">
</head>
<body>
    <div>            
        <form action="desafio_parte2.php" method="get">
          Número: 
            <select name="numero" id="numero">
                <?php
                    $op=1;
                    do{
                        echo "<option value='$op'>$op</option>";
                        $op++;
                    }while($op<=10);
                ?>
            </select>
              
                
            </select>
            <input type="submit" value="Gerar Tabuada"/>
        </form>
    </div>
</body>
</html>