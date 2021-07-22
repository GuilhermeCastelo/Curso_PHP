<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        include "include2.php";             //Inclui outro arquivo/pag
        echo "<p>Testando novas funções</p>";
        ola();
        mostraValor(4);
        echo "<br>Finalizando o programa...";

        //INCLUDE: Inclui outra pag, caso ela nao exista, mostra os erros
        //REQUIRE: Inclui outra pag, caso ela nao exista, para o programa
        //INCLUDE_ONCE / REQUIRE_ONCE: Se a pag ja existir, nao carrega novamente. Se nao existir, carregue ela 1 vezkk
    ?>
</body>
</html>