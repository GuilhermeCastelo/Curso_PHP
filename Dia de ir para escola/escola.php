<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>php</title>
</head>
<body>
    <?php
        $dia = isset($_GET["dia"]) ? $_GET["dia"] : 0;

        switch($dia){
            case 2:
            case 3:
            case 4:
            case 5:
            case 6:
                echo"VAI PARA ESCOLA!";
            break;
            case 7:
            case 8:
                echo"FIQUE EM CASA!";
            break;

            default;
                echo"DIA INVÁLIDO!";    
        }
    ?>
    <br>
    <a href="javascript:history.go(-1)">Voltar</a>
</body>
</html>