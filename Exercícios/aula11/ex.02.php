<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Repetição while</title>
    <link rel="stylesheet" href="estilo/style.css">
</head>
<body>
	<div>
        <form method="get" action="ex.03.php">
		    <?php
		
                $c = 1;
			    while ($c <= 5) {
				    echo "Valor $c: <input type='number' name='v$c' max='100' min='0' value='0'/><br/>";
			        $c++;
			    }//não pode usar aspas duplas "" dentro do echo.                
		    ?>
        
            <input type="submit" value="Enviar"/>
        </form>
	</div>
</body>
</html>