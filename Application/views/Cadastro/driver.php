<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>BussFeed | Cadastro de Motorista</title>
</head>
<body>
    <form action="">
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
                <input type="checkbox" name="cat-cnh" id="cat-a">
                <label for="cat-a">A</label>
            </div>
            <div>
                <input type="checkbox" name="cat-cnh" id="cat-b">
                <label for="cat-b">B</label>
            </div>
            <div>
                <input type="checkbox" name="cat-cnh" id="cat-c">
                <label for="cat-c">C</label>
            </div>
            <div>
                <input type="checkbox" name="cat-cnh" id="cat-d">
                <label for="cat-d">D</label>
            </div>
            <div>
                <label for="cat-e">E</label>
                <input type="checkbox" name="cat-cnh" id="cat-e">
            </div>
        </div>
        
        <input type="submit" value="Cadastrar">
    </form>
</body>
</html>