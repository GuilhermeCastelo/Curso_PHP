<?php

$n1 = $_GET["nota1"];
$n2 = $_GET["nota2"];
$media = ($n1 + $n2) / 2;

if ($media >= 0 && $media < 5) {
    $result = "REPROVADO";
} else {
    if ($media >= 5 && $media < 7) {
        $result = "RECUPERAÇÃO";
    } else {
        $result = "APROVADO";
    }
}

echo "A média entre $n1 e $n2 é: $media<br>";
echo "Resultado final: $result";

?>
