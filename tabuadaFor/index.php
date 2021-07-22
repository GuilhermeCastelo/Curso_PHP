<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <form action="tab.php" method="get">
        <select name="num">
            <?php
                for($cont = 1; $cont <= 10; $cont++){
                    echo "<option>$cont</option>";
                }
            ?>
        </select>
        <input type="submit" value="Calcular">
    </form>
</body>

</html>