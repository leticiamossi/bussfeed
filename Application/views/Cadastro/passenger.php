<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>BussFeed | Cadastro de Passageiro</title>
    <link rel="stylesheet" href="../../public/assets/css/stylePassageiro.css">
</head>
<body>
    <header>
        <h2 class="logoDesc">Bussfeed</h2>
    </header>
    <form action="/cadastrar/passageiro" method="POST" class="sec">
        <div>
            <label for="nome">Nome</label>
            <input type="text" name="nome" class="input" required>
        </div>

        <div>
            <label for="cpf">CPF</label>
            <input type="text" name="cpf" class="input" required>
        </div>

        <div>
            <label for="telefone">Telefone</label>
            <input type="text" name="telefone" class="input" required>
        </div>

        <div>
            <label for="email">E-mail</label>
            <input type="text" name="email" class="input" required>
        </div>

        <!-- CONFERIR SENHAS COM JS-->
        <div>
            <label for="senha">Senha</label>
            <input type="password" name="senha" class="input" required>
        </div>

        <div>
            <label for="senha-confirm">Confirme a Senha</label>
            <input type="password" name="senha-confirm" class="input" required>
        </div>

        <div>
            <label for="rua">Rua</label>
            <input type="text" name="rua" class="input" required>
        </div>

        <div>
            <label for="numero">nº</label>
            <input type="number" name="numero" class="input" required>
        </div>

        <div>
            <label for="bairro">Bairro</label>
            <input type="text" name="bairro" class="input" required>
        </div>

        <div>
            <label for="cidade">Cidade</label>
            <input type="text" name="cidade" class="input" required>
        </div>

        <div>
            <label for="estado">Estado</label>
            <input type="text" name="estado" class="input" required>
        </div>

        <div>
            <label for="cep">CEP</label>
            <input type="text" name="cep" class="input" required>
        </div>

        <div>
            <label for="instituicao">Instituição</label>
            <select name="instituicao" id="instituicao" class="input" required>
                <!--Alimentar com nomes de IS-->
                <option>Faculdades</option>
            </select>
        </div>

        <div>
            <label for="ingresso">Mês e ano de ingresso</label>
            <input type="month" name="ingresso" class="input" required>
        </div>

        <div>
            <label for="codigo">Código da empresa</label>
            <input type="text" name="codigo" class="input" required>
        </div>
        
        <input type="submit" value="Cadastrar" class="entrar">
    </form>
</body>
</html>