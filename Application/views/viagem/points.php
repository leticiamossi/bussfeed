<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>BussFeed | Pontos</title>
    <link rel="stylesheet" href="../../public/assets/css/styleHome.css">
</head>

<body>
<?php require './Application/views/headers/headerEmp.php'?>
    <main>
        <h3>Minhas Viagens</h3>
        <section>
            <?php 
            $D = $data['info']['0']['dataViagem_viagem'];
            $date = new DateTime($D);

            ?>
            <div>
                <div>
                    <h4><?php echo $data['info']['0']['destino_viagem']." - ".$date->format('d/m/Y')?></h4>
                </div>
                <div>
                    <p>Motorista e Veiculo</p>
                    <div>
                        <?php foreach($data['info'] as $viagem){ ?>
                        <p><?php echo $viagem['nome_motorista']." - ".$viagem['modelo_veiculo']." (".$viagem['placa_veiculo'].")"?></p>
                        <?php } ?>
                    </div>
                </div>
                <div>
                    <p>Pontos</p>
                    <div>
                        <?php foreach($data['pontos'] as $ponto){ ?>
                        <p><?php echo $ponto['apelido_pontoEspera']." - ".$ponto['qtd']?></p>
                        <?php } ?>
                    </div>
                </div>
            </div>
        </section>
    </main>
    <?php require './Application/views/headers/footerEmp.php'?>
</body>

</html>