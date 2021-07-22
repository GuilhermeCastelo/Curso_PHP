<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>php</title>
</head>
<body>
    <form method="get" action="form2.php">
    <?php
        $c = 1;
        while($c <= 5){
        echo "Valor $c: <input type='number' name='v$c' min='0' max='100' value='0'><br>";
        $c ++;
        }
    ?>
    <input type='submit' value='Enviar'>
    </form>
</body>
</html>