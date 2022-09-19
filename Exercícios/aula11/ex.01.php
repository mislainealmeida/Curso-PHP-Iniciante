
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
		<?php
			$c = 10;
			while ($c >= 0) {
				echo $c . "<br/>";
				$c -= 2;
			}
           
		?>
	</div>
</body>
</html>