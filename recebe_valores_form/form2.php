<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <?php
    $i = 1;
    while ($i <= 5) {
        $v = "num" . $i;  //  transforma em num1, num2, etc
        $url = "v" . $i;  //  transforma em v1, v2, etc
        $$v = isset($_GET[$url]) ? $_GET[$url] : 0; //  faz com que num1, num2, etc receba os valores vindos por v1, v2, etc através da url
        $i++;
    }

    $i = 1;
    while ($i <= 5) {
        $v = "num" . $i;  //  transforma em num1, num2, etc
        echo "Valor $i : " . $$v . "<br>"; //  mostra o contador e os valores atribuidos às variáveis num1, num2, etc
        $i++;
    }
    ?>
</body>

</html>