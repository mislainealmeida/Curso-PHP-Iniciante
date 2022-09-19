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
            <table border="1">
                <?php
                    $n= array(3,5,8,2);
                    $n[]=7;
                    print_r($n);
                    $c=range(5,20,2);
                    print_r($c);//começa em 5 e vai até 20 pulando de 2 em 2.
                
                    foreach($c as$v){
                        echo "<td>$v ";
                    }

                ?>
            </table>
        </pre>
    </div>
</body>
</html>