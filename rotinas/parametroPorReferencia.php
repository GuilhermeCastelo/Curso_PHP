<?php
    function Teste(&$x){
        $x += 2;
        echo "O valor de X é: $x";
    }

    $a = 3;
    Teste($a);
    echo "<br>O valor de A é: $a";
?>