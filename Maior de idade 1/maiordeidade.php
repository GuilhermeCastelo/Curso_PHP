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

        if($i >= 18){
            $v = "<b>Voto é obrigatório</b>";
            $d = "<b>Autorização para dirigir</b>";
        }
       
        else{
            $v = "<b>Voto não é obrigatório</b>";
            $d = "<b>Sem autorização para dirigir</b>";
        }

        echo "Com a idade informada o $v e tem $d";

    ?>
</body>
</html>