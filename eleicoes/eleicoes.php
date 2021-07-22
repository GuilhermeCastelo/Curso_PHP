<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        $ano = $_GET["an"];
        $idade = 2020 - $ano;
        echo "Quem nasceu em $ano tem $idade anos de idade.<br>";
        $tipo = ($idade >= 18 && $idade < 65) ? "VOTO <b>OBRIGRATÓRIO" : "VOTO <b>NÃO OBRIGATÓRIO";
        echo $tipo;
    ?>
</body>
</html>