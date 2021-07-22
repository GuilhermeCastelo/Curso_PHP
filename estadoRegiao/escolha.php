<?php

$estado = isset($_GET["estado"]) ? $_GET["estado"] : "[ESTADO NÃO IDENTIFICADO]";

switch ($estado) {
    case 1:
        $regiao = "REGIÃO NORTE";
        break;

    case 2:
        $regiao = "REGIÃO NORDESTE";
        break;

    case 3:
        $regiao = "REGIÃO CENTRO-OESTE";
        break;

    case 4:
        $regiao = "REGIÃO SUDESTE";
        break;

    case 5:
        $regiao = "REGIÃO SUL";
        break;

    default:
        $regiao = "[REGIÃO NÃO IDENTIFICADA]";
}

echo "O estado selecionado fica na <b>$regiao</b>";

?>

<br>
<a href="escolha.html">Voltar</a>