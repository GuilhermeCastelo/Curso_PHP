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
            $v = array(5, 5, 3, 2, 1); 

            //sort($v);   //ordena tanto números quanto letras
            //rsort($v);  //ordem inversa
            asort($v);    //desloca tbm os índices

            print_r($v);
        ?>
    </pre>
</body>

</html>