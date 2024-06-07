<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>BussFeed | Cadastro de Motorista</title>
    <link rel="stylesheet" href="../../public/assets/css/style.css">
</head>
<body>
    <form action="/cadastrar/motorista" method="POST">
        <div>
            <label for="nome">Nome</label>
            <input type="text" name="nome">
        </div>

        <div>
            <label for="cpf">CPF</label>
            <input type="text" name="cpf">
        </div>

        <div>
            <label for="telefone">Telefone</label>
            <input type="text" name="telefone">
        </div>

        <div>
            <label for="cnh">CNH</label>
            <input type="text" name="cnh">
        </div>

        <div>
            <label for="cats-cnh">Categoria CNH</label>
            <div>
                <input type="checkbox" name="cat-cnh[]" id="cat-a" value="cat-a">
                <label for="cat-a">A</label>
            </div>
            <div>
                <input type="checkbox" name="cat-cnh[]" id="cat-b" value="cat-b">
                <label for="cat-b">B</label>
            </div>
            <div>
                <input type="checkbox" name="cat-cnh[]" id="cat-c" value="cat-c">
                <label for="cat-c">C</label>
            </div>
            <div>
                <input type="checkbox" name="cat-cnh[]" id="cat-d" value="cat-d">
                <label for="cat-d">D</label>
            </div>
            <div>
                <input type="checkbox" name="cat-cnh[]" id="cat-e" value="cat-e">
                <label for="cat-e">E</label>
            </div>
        </div>

        <div>
            <label for="email">E-mail</label>
            <input type="email" name="email">
        </div>

        <!--VALIDAR-->
        <div>
            <label for="senha">Senha</label>
            <input type="password" name="senha">
        </div>

        <div>
            <label for="connfirm-senha">Confirme a Senha</label>
            <input type="password" name="confirm-senha">
        </div>
        
        <input type="submit" value="Cadastrar">
    </form>
</body>
</html>