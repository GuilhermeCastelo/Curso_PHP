<?php
    $anoNasc = isset($_GET["ano"]) ? $_GET["ano"] : 1900;
    $idade = date("Y") - $anoNasc;

    echo "Você nasceu em: $anoNasc e tem $idade anos<br>";

    if($idade >= 18){
        $votar = "já pode votar";
        $dirigir = "já pode dirigir";
    }
    else{
        $votar = "não pode votar";
        $dirigir = "não pode dirigir";
    }

    echo "Com esta idade você $votar e $dirigir";;

?>
