<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>php</title>

    <style>
        p{
            font-size: 20px;
            font-family: verdana;
        }

        span{
            color: #ff0000;
            font-weight: bold;
        }
    </style>

</head>
<body>
    <?php
        $estados = isset($_GET["estados"]) ? $_GET["estados"] : "ERRO";

        switch($estados){
            case "norte":
                $resp = "REGIÃO NORTE";
        break;

        case "nordeste":
            $resp = "REGIÃO NORDESTE";
        break;

        case "centro-oeste":
            $resp = "REGIÃO CENTRO-OESTE";
        break;

        case "sudeste":
            $resp = "REGIÃO SUDESTE";
        break;

        case "sul":
            $resp = "REGIÃO SUL";
        break;

        default:
            $resp = "REGIÃO INVÁLIDA";
        }

        echo"<p>Você selecionou a <span>$resp</span></p>";
    ?>
</body>
</html>