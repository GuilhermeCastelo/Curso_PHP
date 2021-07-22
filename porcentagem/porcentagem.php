<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Operadores</title>
</head>
<body>
    <?php
        $preco = $_GET["p"];
        echo "O preço informado foi: R$ ", number_format($preco, 2);
        $preco += ($preco * 10 / 100);
        echo "<br>O novo preço com 10% de aumento é R$" . number_format($preco, 2);
    ?>
    
</body>
</html>