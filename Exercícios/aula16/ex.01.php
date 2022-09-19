<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Funções Strings</title>
    <link rel="stylesheet" href="estilo/style.css">k
</head>
<body>
    <div>
        <?php
            $p= "Leite";
            $pr=4.5;
            //echo "O $p custa R$ " .number_format($pr,2);
            
            printf ("O %s custa R$ %.2f",$p, $pr);

            $v[0]=4;
            $v[1]=8;
            $v[2]=3;
           print_r($v);
        ?>
    </div>
</body>
</html>