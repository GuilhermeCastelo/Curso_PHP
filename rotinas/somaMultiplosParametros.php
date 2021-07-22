<?php
    function Soma(){
        $parametros = func_get_args();  //parâmetros via vetor
        $total = func_num_args();       //total desses parâmetros
        $s = 0;

        for($i = 0; $i < $total; $i++){
            $s += $parametros[$i];
        }
        return $s;
    }

    $result = Soma(3, 5, 2, 5, 9, 4, 1, 5, 3);  //assim, pode passar quantos valores quiser
    echo "A soma dos valores é $result";
?>