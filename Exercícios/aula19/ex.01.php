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
                $v[]="O";
                array_push($v,"B");// inclui o B por último
                print_r($v);
                array_pop($v);// elimina o último elemento
                print_r($v);

                array_unshift($v, "T"); // inclui no primeiro elemento
                print_r($v);
                array_shift($v); // elimina o primeiro elemento. 
                print_r($v);


                $tot= count($v);
            echo "O vetor tem $tot elementos<br/>";
            print_r($v);
            var_dump($v);
            var_export($v);
            ?>
        </pre>
    </div>
</body>
</html>