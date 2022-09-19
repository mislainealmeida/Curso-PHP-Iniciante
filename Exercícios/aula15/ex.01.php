<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Passagem por referência</title>
    <link rel="stylesheet" href="estilo/style.css">
</head>
<body>
    <div>
        <?php
            function teste($x){
                $x +=2;
                echo "O valor de x é $x";
            }
            $a=3;
            teste($a);
            echo "<p> O valor de A é $a<p/>";

            function teste1(&$x){
                $x +=2;
                echo "O valor de x é $x";
            }
            $a=3;
            teste($a);
            echo "<p> O valor de A é $a<p/>";
        ?>
    </div>
</body>
</html>