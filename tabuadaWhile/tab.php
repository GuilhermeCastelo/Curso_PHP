<?php
    $num = isset($_GET["txtNumero"]) ? $_GET["txtNumero"] : 1;

    echo "<h3>Tabuada de $num:</h3>";

    $cont = 1;

    do{
        $result = $num * $cont;
        echo "$num x $cont = $result " . "<br>";
        $cont++;
    }while($cont <= 10);
?>
<a href="tabuada.php">Voltar</a>