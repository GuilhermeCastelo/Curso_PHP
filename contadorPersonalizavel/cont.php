<?php

$inicio = $_GET["inicio"];
$final = $_GET["final"];
$incremento = $_GET["incr"];

if ($inicio < $final) {

    while ($inicio <= $final) {
        echo $inicio . " - ";

        $inicio += $incremento;
    }

}else{
    while ($inicio >= $final) {
        echo $inicio . " - ";

        $inicio -= $incremento;
    }
}
?>
<a href="cont.html">Voltar</a>