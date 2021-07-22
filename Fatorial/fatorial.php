<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>php</title>
</head>
<body>
    <?php
        $valor = isset($_GET["valor"]) ? $_GET["valor"] : 1;
        echo"<h1>Calculando o fatorial de $valor</h1>";

        $cont = $valor;
        $fat = 1;
        do{
            $fat = $fat * $cont;
            $cont--;;
        } while($cont >= 1);

        echo "<h2>$valor! = $fat</h2>"
    ?>
    <a href="fatorial.html">Voltar</a>
</body>
</html>