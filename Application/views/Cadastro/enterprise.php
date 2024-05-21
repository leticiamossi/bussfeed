<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>BussFeed | Cadastro de Empresa</title>
</head>
<body>
    <form action="/cadastrar/empresa" method="POST">
        <div>
            <label for="nome">Nome da empresa</label>
            <input type="text" name="nome">
        </div>
        <div>
            <label for="responsavel">Nome do responsável</label>
            <input type="text" name="responsavel">
        </div>
        <div>
            <label for="cnpj">CNPJ</label>
            <input type="text" name="cnpj">
        </div>
        <div>
            <label for="telefone">Telefone</label>
            <input type="text" name="telefone">
        </div>
        <div>
            <label for="email">E-mail</label>
            <input type="text" name="email">
        </div>
        <!--VALIDAR SENHA COM JS-->
        <div>
            <label for="senha">Senha</label>
            <input type="password" name="senha">
        </div>
        <div>
            <label for="senha-confirm">Confirme sua senha</label>
            <input type="password" name="senha-confirm">
        </div>
        <input type="submit" value="Cadastrar">
    </form>
</body>
</html>