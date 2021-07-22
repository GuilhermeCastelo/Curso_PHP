<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>php</title>
</head>
<body>
    <?php
        $contador = 1;

        while ($contador <= 10){
            echo "<br>$contador";
            $contador = $contador + 1; //ou $contador++ ou $contador += 1
        }
    ?>
</body>
</html>