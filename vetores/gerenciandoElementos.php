<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <pre>
        <?php
            $v = array("A", "E", "I", "O", "U");

            //array_push($v, "Z");
            //array_pop($v);

            //array_unshift($v, "@");
            array_shift($v);

            print_r($v);

        ?>
    </pre>
</body>

</html>