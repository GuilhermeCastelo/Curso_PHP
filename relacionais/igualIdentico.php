<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <?php
        $a = 3;
        $b = "3";
        $r = ($a == $b) ? "SIM" : "NÃO";

        echo "As variáveis A e B são iguais? $r<br>";

        
        $r = ($a === $b) ? "SIM" : "NÃO";

        echo "As variáveis A e B são idênticas? $r";
    ?>
</body>

</html>