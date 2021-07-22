<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <form method="GET" action="var.php">
        <?php
            $c = 1;
            while($c <= 5){
                echo "Valor $c: <input type='number' value='0' name='v$c' min='0' max='100'><br>";
                $c++;
            }
        ?>
        <input type="submit" value="Enviar">
    </form>
</body>

</html>