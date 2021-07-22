<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>php</title>
</head>
<body>

    <?php
        $cont = 0;                     //cont recebe o num escolhido
        do{                           //faça
            echo "$cont ";
            $cont+=2;               //pular atraves de num escolhido
        }while($cont <= 20);       //enquanto
    ?>
    
</body>
</html>