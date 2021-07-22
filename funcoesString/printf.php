<?php
    $produto = "Leite";
    $preco = 4.5;

    //echo "O $produto custa R$" . number_format($preco, 2);
    printf("O %s custa R$%.2f", $produto, $preco);
?>