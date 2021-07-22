<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <pre>
    <?php
    $v = array(
        3 => 5,
        1 => 9,
        0 => 8,
        7 => 7
    );

    $v[] = "E"; //adiciona no automaticamente no último índice

    unset($v[0]); //destói a variável especificada

    print_r($v);
    ?>

    </pre>
</body>

</html>