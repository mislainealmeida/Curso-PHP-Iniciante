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
           $t= "Aqui temos um texto gigante criado pelo PHP e  vai mostrar o funcionamento da função wordwrap";
           //$r =  $r=wordwrap($t, 5) quebra o valor dentro do código HTML gerado.
           
           //$r=wordwrap($t,5, "<br/>) quebra visualmente o valor, mas não quebra no código HTML.

           //$r=wordwrap($t,5, "<br/>\n") assim ele quebra tanto no código HTML quanto visualmente. 
          
           $r=wordwrap($t,5, "<br/>\n", false);
           echo $r;
           //o false gera a quebra por palavra com menos de 5 letras. O true gera a quebra a cada 5 letras independetende se cortou a palavra ao meio.  
        ?>
    </div>
</body>
</html>