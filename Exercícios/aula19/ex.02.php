<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Funções de vetores</title>
    <link rel="stylesheet" href="estilo/style.css">
</head>
<body>
    <div>
        <pre>
            <?php

                $v= array("A","J","M","X","K");
                print_r($v);

                echo "1º Exemplo.";
                $v= array("A","J","M","X","K");
                sort($v);// muda somente os elementos. 
                print_r($v);

                echo "2º Exemplo.";
                $v= array("A","J","M","X","K");
                rsort($v);// ordem reversa, muda somente os elementos.
                print_r($v);

                echo "3º Exemplo.";
                $v= array("A","J","M","X","K");
                asort($v);// muda os elementos com os índices. 
                print_r($v);

                echo "4º Exemplo.";
                $v= array("A","J","M","X","K");
                arsort($v);//ordem reversa, muda os elementos com índices. 
                print_r($v);

                echo "5º Exemplo.";
                $v= array("A","J","M","X","K");
                ksort($v);// ordem dos índices.
                print_r($v);

                echo "6º Exemplo.";
                $v= array("A","J","M","X","K");
                krsort($v);// ordem reversa dos índices.
                print_r($v);
            ?>
        </pre>
    </div>
</body>
</html>