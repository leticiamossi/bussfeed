<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>BussFeed | Cadastro de Ponto</title>
    <link rel="stylesheet" href="../../public/assets/css/stylePonto.css">
</head>
<body>
<?php require './Application/views/headers/headerPas.php'?>
    <form action="/cadastrar/ponto" method="POST">

        <div>
            <label for="apelido">Apelido</label>
            <input type="text" name="apelido" class=input required>
        </div>

        <div>
            <label for="rua">Rua</label>
            <input type="text" name="rua" class=input required>
        </div>

        <div>
            <label for="bairro">Bairro</label>
            <input type="text" name="bairro" class=input required>
        </div>

        <div>
            <label for="cidade">Cidade</label>
            <input type="text" name="cidade" class=input required>
        </div>

        <div>
            <label for="ponto-ref">Ponto Referência</label>
            <input type="text" name="ponto-ref" class=input required>
        </div>

        <div>
            <label for="hora">Hora</label>
            <input type="time" name="hora" class=input required>
        </div>

        <input type="submit" value="Cadastrar" class=entrar required>
    </form>
</body>
<?php require './Application/views/headers/footerPas.php'?>
</html>