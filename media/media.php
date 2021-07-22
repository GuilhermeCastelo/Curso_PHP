<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        
        $maior;
        $m = $_GET['m'];

        $situacao = $m > 5 ? "Aprovado" : "Reprovado";

        echo $situacao;
    ?>
</body>
</html>