<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ano anterior</title>
</head>
<body>
    <?php
        $atual = $_GET["aa"]; //pega ano na URL  // comentátios: //, # e  /* */.
        echo "O ano atual é $atual e o ano anterior foi ".--$atual;
    ?>
</body>
</html>