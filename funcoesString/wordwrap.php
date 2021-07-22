<?php
    $texto = "Esse é um exemplo de texto gigante criado pelo PHP com a intenção de mostrar o porque de se usar a função wordwrap";
    $result = wordwrap($texto, 5, "<br>\n", false);
    echo $result;
?>