<?php
$num = isset($_GET["num"]) ? $_GET["num"] : 1;

for ($cont = 1; $cont <= 10; $cont++) {
    $result = ($num * $cont);
    echo "$num x $cont = $result <br>";
}
?>
<a href="javascript:history.go(-1)">Voltar</a>