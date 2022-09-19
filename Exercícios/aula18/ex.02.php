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
                    
                $v= array(3=>5,
                          1=>9,
                          0=>8,
                          7=>7);
                $v[]=9;
                unset($v[3]);
                print_r($v);

                $v= array("nome"=>"Ana",
                          "idade"=>23,
                           "peso"=>65.5);
                
                $v["fuma"]= false;
                // para verdadeiro é 1 para falso é vazio.
                foreach($v as $k =>$c){
                    echo "O campo $k possui o conteúdo do  $c</br>";
                }
                
            ?>
            
        </pre>
    </div>
</body>