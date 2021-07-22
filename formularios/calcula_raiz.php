<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
<?php
    $valor = $_GET["v"];

    $rq = sqrt($valor);

    echo "A raiz quadrada de $valor é igual a " . number_format($rq, 2);
?>

    <a href="calcula_raiz.html">Voltar</a>
</body>

</html>