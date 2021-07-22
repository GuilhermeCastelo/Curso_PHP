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
        $matriz = array(
            array(6, 4),
            array(4, 9),
            array(3, 2)
        );
        

        $matriz[0][1] = $matriz[1][1]; //substituindo valores de um para outro vetor

        print_r($matriz);
        ?>
    </pre>
</body>

</html>