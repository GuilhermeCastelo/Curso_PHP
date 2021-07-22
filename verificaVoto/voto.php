<?php
$anoNasc = isset($_GET["ano"]) ? $_GET["ano"] : 1900;
$idade = date("Y") - $anoNasc;

echo "Você nasceu em: $anoNasc e tem $idade anos<br>";

if ($idade < 16) {
    $tipoVoto = "Não vota";
} else {
    if (($idade >= 16 && $idade < 18) || ($idade > 70)) {
        $tipoVoto = "Voto opcional";
    } else {
        $tipoVoto = "Voto obrigatório";
    }
}

/*OU USE O ELSEIF

if ($idade < 16) {
    $tipoVoto = "Não vota";
} elseif (($idade >= 16 && $idade < 18) || ($idade > 70)) {
    $tipoVoto = "Voto opcional";
} else {
    $tipoVoto = "Voto obrigatório";
}*/ 

echo "<br>Para esta idade <b>$tipoVoto</b>";

?>