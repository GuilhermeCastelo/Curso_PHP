<?php
    function Soma($a, $b){
        $r = $a + $b;
        return $r;  // ou return $a + $b; (sem criar $r)
    }

    $x = 4;
    $y = 5;

    $soma = Soma($x, $y);
    echo "A soma entre $x e $y resulta em: $soma";
?>