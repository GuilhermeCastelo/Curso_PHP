<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <table border="1"><tr>
        <?php
        $c = range(5, 20, 1);

        foreach ($c as $valor) {
            echo "<td>$valor</td>";
        }
        ?>
    </tr></table>
</body>

</html>