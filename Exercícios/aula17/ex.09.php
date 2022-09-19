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
         $letra= chr(67);
         echo "A letra de código 67 é $letra.";
         $letra= chr(99);
         echo "<br/>A letra de código 99 é $letra.";

         $letra= "C";
         $cod= ord($letra); 
         echo "<br/>A letra $letra corresponde ao código $cod."; 
         
         $letra= "c";
         $cod= ord($letra); 
         echo "<br/>A letra $letra corresponde ao código $cod.";
    
        ?>
    </div>
</body>
</html>