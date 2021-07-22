<?php
$num = isset($_GET['txtValor']) ? $_GET['txtValor'] : 1;

$cont = $num;
$fat = 1;

do {
    $fat = $fat * $cont;
    $cont--;
} while ($cont >= 1);

echo "$num! = $fat";
?>

<br><a href="fat.html">Voltar</a>