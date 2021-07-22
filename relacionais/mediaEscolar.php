<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <?php
        $nota1 = $_GET["n1"];
        $nota2 = $_GET["n2"];
        $media = ($nota1 + $nota2) / 2;
        echo "<h3>A média entre $nota1 e $nota2 é: $media</h3><br>";
        echo "<h3>O(a) aluno(a) está: " . (($media < 6 ) ? "REPROVADO(A)" : "APROVADO(A)</h3>"); 
    ?>
</body>

</html>