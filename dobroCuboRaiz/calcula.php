<?php
$num = isset($_GET["num"]) ? $_GET["num"] : 0;
$op = isset($_GET["oper"]) ? $_GET["oper"] : 1;

switch ($op) {
    case 1:
        $resul = $num * 2;
        break;

    case 2:
        $resul = pow($num, 3);
        break;

    case 3:
        $resul = sqrt($num);    //$num ^ (1/2)
}

echo "O resultado da operação escolhida foi: $resul";
?>

<a href="calcula.html">Voltar</a>