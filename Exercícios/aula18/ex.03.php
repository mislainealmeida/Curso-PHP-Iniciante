<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Array</title>
    <link rel="stylesheet" href="estilo/style.css">
</head>
<body>
    <div>
        <pre>
            <?php
            $m=array(array(6,4),// O 6 esta na linha 0, coluna 0 e o 4 esta na linha 0, coluna 1
                     array(4,9),
                     array(3,2));
            $m[0][1] = $m[2][0]; // A linha 0 e coluna 1 que era o 4 passa a ser o 3 (que esta na linha 2 e coluna 0).

            print_r($m);
           ?>       
            
        </pre>
    </div>
</body>