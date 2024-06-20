<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>BussFeed</title>
</head>
<body>
    <header>
        <a href="/login/logout">Sair</a>
    </header>
    <main>
        <h3>Viagem 
        <?php 
        date_default_timezone_set('America/Bahia');
        echo date('d/m/y') 
        ?></h3>
        <p>Assentos Necessários: <?php echo $data['passageiros'] ?></p>
        <form action="/viagem/confirmacao/<?php echo $data['id'] ?>" method="POST">
        <div>
            <label for="veiculo">Veiculo</label>
            <select name="veiculo" id="veiculo">
                <?php foreach($data['veiculos'] as $veiculo){?>
                    <option value="<?php echo $veiculo['id_veiculo'] ?>"><?php echo $veiculo['modelo_veiculo']." - ".$veiculo['placa_veiculo'] ?></option>
                <?php } ?>
            </select>
        </div>
        <div>
            <label for="motorista">motorista</label>
            <select name="motorista" id="motorista">
                <?php foreach($data['motoristas'] as $motorista){?>
                    <option value="<?php echo $motorista['id_motorista'] ?>"><?php echo $motorista  ['nome_motorista']?></option>
                <?php } ?>
            </select>
        </div>
        <input type="submit" value="Confirmar">
        </form>
    </main>
</body>
</html>