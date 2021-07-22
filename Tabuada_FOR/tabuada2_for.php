<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>php</title>
</head>
<body>
    <?php
        $num = isset($_GET["num"]) ? $_GET["num"] : 1;

        for($c = 1; $c <= 10; $c++){
            $tab = $num * $c;
            echo "$num x $c = $tab <br>";
        }
    ?>
    <br><a href="javascript:history.go(-1)">Voltar</a>
</body>
</html>