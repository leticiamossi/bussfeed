<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>BussFeed | Viagens</title>
    <link rel="stylesheet" href="../../public/assets/css/style.css">
</head>

<body>
<?php require './Application/views/headers/headerPas.php'?>
    <main>
        <h3>Minhas Viagens</h3>
        <section>
            <?php foreach($data['viagens'] as $viagem){
                $data = new DateTime($viagem['dataViagem_viagem']);?>
            <div>
                <div>
                    <h4><?php echo $viagem['destino_viagem']." - ".$data->format('d/m/Y');?></h4>
                </div>
                <div>
                    <div>
                        <p>Motorista e Veiculo</p>
                        <p><?php echo $viagem['nome_motorista']." - ".$viagem['modelo_veiculo']." (".$viagem['placa_veiculo'].")"?></p>
                    </div>
                </div>
                <?php } ?>
            </div>
        </section>
    </main>
    <?php require './Application/views/headers/footerPas.php'?>
</body>

</html>