<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>BussFeed | Cadastro de Passageiro</title>
    <link rel="stylesheet" href="public\assets\css\style.css">
</head>
<body>
    <form action="/cadastrar/passageiro" method="POST">
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
            <label for="email">E-mail</label>
            <input type="text" name="email">
        </div>

        <!-- CONFERIR SENHAS COM JS-->
        <div>
            <label for="senha">Senha</label>
            <input type="password" name="senha">
        </div>

        <div>
            <label for="senha-confirm">Confirme a Senha</label>
            <input type="password" name="senha-confirm">
        </div>

        <div>
            <label for="rua">Rua</label>
            <input type="text" name="rua">
        </div>

        <div>
            <label for="numero">nº</label>
            <input type="number" name="numero">
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
            <label for="estado">Estado</label>
            <input type="text" name="estado">
        </div>

        <div>
            <label for="cep">CEP</label>
            <input type="text" name="cep">
        </div>

        <div>
            <label for="instituicao">Instituição</label>
            <select name="instituicao" id="instituicao">
                <!--Alimentar com nomes de IS-->
                <option>Faculdades</option>
            </select>
        </div>

        <div>
            <label for="ingresso">Mês e ano de ingresso</label>
            <input type="month" name="ingresso">
        </div>

        <div>
            <label for="codigo">Código da empresa</label>
            <input type="text" name="codigo">
        </div>
        
        <input type="submit" value="Cadastrar">
    </form>
</body>
</html>