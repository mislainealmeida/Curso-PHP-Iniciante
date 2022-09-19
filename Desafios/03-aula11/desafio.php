<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Desafio 03</title>
    <link rel="stylesheet" href="estilo/style.css">
</head>
<body>
<div>
			<?php
				$inicio = isset($_GET["inicio"]) ? $_GET["inicio"] : 0;
				$final = isset($_GET["final"]) ? $_GET["final"] : 0;
				$incremento = isset($_GET["incremento"]) ? $_GET["incremento"] : 1;
				$crescente = $inicio < $final ? true : false;

				if ($crescente) {
					while ($inicio <= $final) {
						echo "$inicio ";
						$inicio += $incremento;
					}
				} else {
					while ($inicio >= $final) {
						echo "$inicio ";
						$inicio -= $incremento;
					}
				}
			?>
			<br/>
			<a href="desafio.html">Votlar</a>
		</div>
</body>
</html>