<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <?php
        $v1 = $_GET['x'];
        $v2 = $_GET['y'];

        echo "<h2>Valores recebidos: $v1 e $v2</h2>";
        
        echo "O valor absoluto de $v2 é: " . abs($v2);
        echo "<br>O valor de $v1<sup>$v2</sup> é " . pow($v1, $v2);
        echo "<br>A raiz quadrada de $v1 é " . sqrt($v1); 
        echo "<br>O valor de $v2 aredondado é " . round($v2); //ceil e floor
        echo "<br>A parte inteira de $v2 é " . intval($v2);
        echo "<br> O valor de $v1 em moeda R$" . number_format($v1, 2, ",",  ".");
    ?>
</body>

</html>