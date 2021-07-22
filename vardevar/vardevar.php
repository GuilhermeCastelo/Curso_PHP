<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Variáveis de variáveis</title>
</head>
<body>
    <?php
        $x = "abc";
        $$x = "def";

        echo "O conteúdo da variável X é: $x";
        echo "<br>A variável ABC criada recbeu o valor: $abc";
    ?>
</body>
</html>