<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>php</title>
</head>

<body>
    <?php
    $a = isset($_GET["ano"]) ? $_GET["ano"] : 1900;
    $i = date("Y") - $a;
    echo "Você nasceu em $a e terá $i anos<br>";

    if ($i < 16) {
        $tipoVoto = "NÃO VOTA";
    } 
    elseif (($i >= 16 && $i < 18) || ($i > 65)) {
        $tipoVoto = "VOTO OPCIONAL";
    } 
    else {
        $tipoVoto = "VOTO OBRIGATÓRIO";
    }
    
    echo "$tipoVoto";
    ?>
</body>

</html>