<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>BussFeed | Cadastro</title>
    <link rel="stylesheet" href="public\assets\css\style.css">
</head>

<body>
    <form action="">
        <div>
            <label for="ptn-espera">Ponto de espera</label>
            <input type="text" name="ptn-espera">
        </div>

        <div>
            <label for="ptn-chegada">Ponto de chegada</label>
            <input type="text" name="ptn-chegada">
        </div>

        <div>
            <label for="ptn-chegada">Dias que usará o transporte</label>
            <div>
                <input type="checkbox" name="dias-semana" id="segunda">
                <label for="segunda">Segunda-feira</label>
                </input>
            </div>
            <div>
                <input type="checkbox" name="dias-semana" id="terca">
                <label for="terca">Terça-feira</label>
                </input>
            </div>
            <div>
                <input type="checkbox" name="dias-semana" id="quarta">
                <label for="quarta">Quarta-feira</label>
                </input>
            </div>
            <div>
                <input type="checkbox" name="dias-semana" id="quinta">
                <label for="quinta">Quinta-feira</label>
                </input>
            </div>
            <div>
                <input type="checkbox" name="dias-semana" id="sexta">
                <label for="sexta">Sexta-feira</label>
                </input>
            </div>
        </div>
    </form>
</body>

</html>