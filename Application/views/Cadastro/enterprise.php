<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>BussFeed | Cadastro de Empresa</title>
    <link rel="stylesheet" href="../../public/assets/css/style.css">
</head>
<body>
    <?php require './Application/views/headers/headerEmp.php'?>
    <form action="/cadastrar/empresa" method="POST" class="sec">
        <div>
            <label for="nome">Nome da empresa</label>
            <input type="text" name="nome" class="input" required>
        </div>
        <div>
            <label for="responsavel">Nome do responsável</label>
            <input type="text" name="responsavel" class="input" required>
        </div>
        <div>
            <label for="cnpj">CNPJ</label>
            <input type="text" name="cnpj" class="input" required>
        </div>
        <div>
            <label for="telefone">Telefone</label>
            <input type="text" name="telefone" class="input" required>
        </div>
        <div>
            <label for="email">E-mail</label>
            <input type="text" name="email" class="input" required>
        </div>
        <!--VALIDAR SENHA COM JS-->
        <div>
            <label for="senha">Senha</label>
            <input type="password" name="senha" class="input" required>
        </div>
        <div>
            <label for="senha-confirm">Confirme sua senha</label>
            <input type="password" name="senha-confirm" class="input" required>
        </div>
        <input type="submit" value="Cadastrar" class="entrar">
    </form>
</body>
<?php require './Application/views/headers/footerEmp.php'?>
</html>