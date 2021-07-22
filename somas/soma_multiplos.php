<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>php</title>
</head>
<body>
    <?php
        function soma(){
            $vetor = func_get_args(); //Cria vetor com todos os argumentos informados
            $total = func_num_args(); //Retorna a quantidade de argumentos informados
            $s = 0;
            for($i = 0; $i < $total; $i++){
                $s+= $vetor[$i];
            }
            return $s;
        }

        $result = soma(3,5,2,5,7,9,1,5);
        echo "A soma dos valores é $result";
        
    ?>
</body>
</html>