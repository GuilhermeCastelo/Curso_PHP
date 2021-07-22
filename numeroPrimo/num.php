<?php
    $num = isset($_GET["num"]) ? $_GET["num"] : 1;
    $cont = 0;

    echo "Analisando o número: $num<br>";
    echo "Valores múltiplos: ";

    for($i = 1; $i <= $num; $i++){ 
        if($num % $i == 0){
            $cont += 1;
            echo "$i ";
        }
    }

    echo "<br>Total de múltiplos: " . $cont;

    if($cont == 2){
        echo "<br> É PRIMO";
    }else{
        echo "<br> NÃO É PRIMO";
    }
     
?>