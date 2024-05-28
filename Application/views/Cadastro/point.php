<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>BussFeed | Cadastro de Ponto</title>
    <link rel="stylesheet" href="bussfeed\public\assets\css\style.css">
</head>
<body>
    <form action="/cadastrar/ponto" method="POST">

        <div>
            <label for="apelido">Apelido</label>
            <input type="text" name="apelido">
        </div>

        <div>
            <label for="rua">Rua</label>
            <input type="text" name="rua">
        </div>

        <div>
            <label for="bairro">Bairro</label>
            <input type="text" name="bairro">
        </div>

        <div>
            <label for="cidade">Cidade</label>
            <input type="text" name="cidade">
        </div>

        <div>
            <label for="ponto-ref">Ponto Referência</label>
            <input type="text" name="ponto-ref">
        </div>

        <div>
            <label for="hora">Hora</label>
            <input type="time" name="hora">
        </div>

        <input type="submit" value="Cadastrar">
    </form>
</body>
</html>