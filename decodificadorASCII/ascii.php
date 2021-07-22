<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Codificando para ANCII</title>
    <style>
        div {
            display: flex;
            flex-direction: column;
            justify-content: center;
            align-items: center;
            width: 98vw;
            height: 97vh;
        }
        div>form>input {
            width: 300px;
            font-size: 50px;
            text-align: center;
        }
        div>label,span{
            padding: 10px;
            font-family: sans-serif;
            font-size: 18px;
        }
    </style>
</head>

<body>
    <div>
        <label for="txtCaractere">Informe um caractere:</label>
        <form id="frmForm">
            <input type="text" name="txtCaractere" id="txtCaractere" minlength="1" maxlength="1" autocomplete="off" oninput="fnEnviar()">
        </form>

        <?php
        $letra = isset($_GET["txtCaractere"]) ? $_GET["txtCaractere"] : "A";
        $cod = ord($letra);

        echo "<span>O caractere <b>$letra</b> corresponde ao número <b>$cod</b> na tabela ASCII</span>";
        ?>
    </div>
</body>

<script>
    function fnEnviar() {
        document.getElementById("frmForm").submit();
    }
</script>

</html>