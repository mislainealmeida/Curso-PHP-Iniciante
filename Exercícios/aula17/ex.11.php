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
       
            $nome= "mislaine almeida";
            echo "Seu nome é ".strrev($nome);

            $frase= "Estou aprendedndo PHP.";
            $pos= strpos($frase, "PHP");
            echo"<br/> A string foi encontrada na posição $pos";

            $frase= "Estou aprendedndo PHP no Curso em Vídeo de PHP.";
            $cont= substr_count($frase, "PHP");
            echo"<br/> PHP encontrado $cont vezes"; 

            $site= "Curso em Vídeo";
            $sub= substr($site,0,5);
            echo"<br/> $sub";
            //0 é a primeira letra e eu vou andar 5 letras. Se eu colocar apenas um valor Ex. 7 vai aparecer da 7° posição e vai até o final, se eu colocar -5 aparecerá as 5 últimas letras. 

            $nome="Mislaine";
            $novo= str_pad($nome,30," *", STR_PAD_RIGHT);
            echo "<br/> $novo está estudando PHP.";
            //posso usar tbm STR_PAD_CENTER, STR_PAD_LEFT que muda a direção do caractere preenchido na string. 
            
            $txt= str_repeat("php ",5);
            echo"<br/>O texto gerado foi $txt<br/>";
            print(str_repeat("-",20));

            $frase= "Gosto de estudar Matemática!!!";
            $novaFrase= str_replace("Matemática", "PHP", $frase);
            echo "<br/> $novaFrase";


        ?>
    </div>
</body>
</html>