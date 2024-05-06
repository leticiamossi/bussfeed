<!--Tela de Login-->
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>BussFeed | Login</title>
</head>
<body>
    <form action="/home" method="POST">
        <div>
            <label for="email">E-mail</label>
            <input type="text" name="email">
        </div>
        <div>
            <label for="senha">Senha</label>
            <input type="text" name="senha">
        </div>
        <input type="submit" value="Entrar">
    </form>
    <div>
        <p>ou</p>
        <a href="/cadastro/type">Cadastre-se aqui</a>
    </div>
</body>
</html>