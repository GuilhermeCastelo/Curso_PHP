<?php
$dia = isset($_GET["dia"]) ? $_GET["dia"] : 0;

switch ($dia) {
    case 2:
    case 3:
    case 4:
    case 5:
    case 6:
        echo "Levanta! Hoje tem aula ;)";
        break;

    case 7:
    case 8:
        echo "Pode descançar um pouco mais hoje :)";
        break;

    default:
        echo "Não reconheci este dia da semana :(";
}
?>

<br>

<a href="javascript:history.go(-1)">Voltar</a>