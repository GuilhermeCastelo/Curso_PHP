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
        $cont = 1;

        echo"<h2>Tabuada do $num:</h2>";

        do{
            $mult = $num * $cont;
            echo"$num x $cont = $mult<br>";
            $cont++;
        }while($cont <= 10);
    ?>
</body>
</html>