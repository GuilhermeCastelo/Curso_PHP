<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>php</title>
</head>
<body>
    <?php
        $inicio = isset($_GET["inicio"]) ? $_GET["inicio"] : 0;
        $final = isset($_GET["final"]) ? $_GET["final"] : 0;  
        $inc = isset($_GET["inc"]) ? $_GET["inc"] : 0;  

        if($inicio <= $final){
            while($inicio <= $final){
                echo "$inicio<br>";
                $inicio = $inicio + $inc;
            }
        }
        elseif($inicio >= $final){
            while($inicio >= $final){
                echo "$inicio<br>";
                $inicio = $inicio - $inc;
            }
        }
    ?>
</body>
</html>