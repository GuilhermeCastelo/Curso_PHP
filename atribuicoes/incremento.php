<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <?php
        $atual = $_GET['aa'];

        echo "O ano atual é $atual";
        echo "<br>O ano anterior é " . --$atual;
    ?>
</body>

</html>