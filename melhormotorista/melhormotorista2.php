<?php
	//	Este desafio foi elaborado pelo TheCoder e realizado por mim (Guilherme)
	
    $motoristas = array((4.7 * 3) / 3000, "João",
        (4.2 * 5) / 2700, "Mário",
        (3.7 * 4.5) / 2800, "Marcelo",
        (4.8 * 7) / 1900, "Carla",
        (4.4 * 6) / 4400, "Amanda"
    );

    $melhor = 0;

    for ($i = 0; $i < 10; $i+=2) {
        if($melhor < $motoristas[$i]){
            $melhor = $motoristas[$i];
            $nome = $motoristas[$i + 1];
        }
    }

    echo "O(a) melhor motorista é: $nome com pontuação: $melhor";
?>