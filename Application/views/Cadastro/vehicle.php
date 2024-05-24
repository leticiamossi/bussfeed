<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>BussFeed | Cadastro de Veículo</title>
    <link rel="stylesheet" href="public\assets\css\style.css">
</head>
<body>
    <form action="/cadastrar/veiculo" method="POST">
        <div>
            <label for="modelo">Modelo</label>
            <select name="modelo" id="modelo">
                <option>Ônibus</option>
                <option>Micro-Ônibus</option>
                <option>Van</option>
            </select>
        </div>

        <div>
            <label for="placa">Placa</label>
            <input type="text" name="placa">
        </div>

        <div>
            <label for="marca">Marca</label>
            <input type="text" name="marca">
        </div>

        <div>
            <label for="situacao">Situação</label>
            <select name="situacao" id="situacao">
                <option>Próprio</option>
                <option>Alugado</option>
                <option>Emprestado</option>
            </select>
        </div>

        <div>
            <label for="lugares">Quantidade de Lugares</label>
            <input type="number" name="lugares">
        </div>

        <div>
            <label for="status">Status</label>
            <select name="status" id="status">
                <option>Ativo</option>
                <option>Inativo</option>
                <option>Manutenção</option>
            </select>
        </div>
        
        <input type="submit" value="Cadastrar">
    </form>
</body>
</html>