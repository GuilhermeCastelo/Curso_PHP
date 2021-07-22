<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <?php
        $ano = $_GET["ano"];
        $idade = 2021 - $ano;
        echo "Quem nasceu em $ano tem $idade anos";
        $tipo = ($idade >= 18 && $idade < 65) ? "OBRIGATÓRIO" : "NÃO OBRIGATÓRIO";
        echo "<br>Seu voto é: <b>$tipo</b>";
    ?>
</body>

</html>