<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>BussFeed | Cadastro</title>
    <link rel="stylesheet" href="../../public/assets/css/style.css">
</head>

<body>
    <form action="" class="sec">
        <div>
            <label for="ptn-espera">Ponto de espera</label>
            <input type="text" name="ptn-espera" class="input" required>
        </div>

        <div>
            <label for="ptn-chegada">Ponto de chegada</label>
            <input type="text" name="ptn-chegada" class="input" required>
        </div>

        <div>
            <label for="ptn-chegada">Dias que usará o transporte</label>
            <div>
                <input type="checkbox" name="dias-semana" id="segunda" class="input">
                <label for="segunda">Segunda-feira</label>
                </input>
            </div>
            <div>
                <input type="checkbox" name="dias-semana" id="terca" class="input">
                <label for="terca">Terça-feira</label>
                </input>
            </div>
            <div>
                <input type="checkbox" name="dias-semana" id="quarta" class="input">
                <label for="quarta">Quarta-feira</label>
                </input>
            </div>
            <div>
                <input type="checkbox" name="dias-semana" id="quinta" class="input">
                <label for="quinta">Quinta-feira</label>
                </input>
            </div>
            <div>
                <input type="checkbox" name="dias-semana" id="sexta" class="input">
                <label for="sexta">Sexta-feira</label>
                </input>
            </div>
        </div>
    </form>
</body>

</html>