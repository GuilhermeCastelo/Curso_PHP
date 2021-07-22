<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <form method="GET" action="tab.php">
        <select name="txtNumero">
            <?php
                $c = 1;

                while($c <= 10){
                    ?>
                        <option><?php echo $c ?></option>
                    <?php
                    $c++;
                }
            ?>
        </select>
        <input type="submit" value="Tabuada">
    </form>
</body>

</html>