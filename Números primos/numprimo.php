<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>php</title>
</head>
<body>
    <?php 
        $c= 1;
        $div = 0;

        $num = isset($_GET["num"]) ? $_GET["num"] : 0;

        echo "<b>Analisando o número: $num</b> <br>";

        echo "Valores múltiplos: ";
        for($c = 1; $c <= $num; $c++){
            $modulo = $num % $c;

            if($modulo == 0 && $c >= 1){
                echo "$c ";
                $div++;
            }
        }
        echo "<br>Total de divisores: $div <br>";

        if($div == 2){
            echo "RESULTADO: É UM NÚMERO PRIMO";
        }else{
            echo "RESULTADO: NÃO É UM NÚMERO PRIMO";
        }
    ?>
    <br>
    <a href="numprimo.html">Voltar</a>
</body>
</html>