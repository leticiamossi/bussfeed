<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>BussFeed | Veiculos</title>
    <link rel="stylesheet" href="../../public/assets/css/styleVeiculo.css">
</head>
<body>
<?php require './Application/views/headers/headerEmp.php'?>
    <main class="veiculos">
        <h3>Meus Veículos</h3>
        <section>
            <?php foreach($data['veiculos'] as $veiculo){ ?>
            <div>
                <div>
                    <h4><?php echo $veiculo['modelo_veiculo'] ?></h4>
                    <p>Status: <?php echo $veiculo['status_veiculo'] ?></p>
                </div>
                <div>
                    <div>
                        <p>Modelo</p>
                        <p><?php echo $veiculo['modelo_veiculo'] ?></p>
                    </div>
                    <div>
                        <p>Placa</p>
                        <p><?php echo $veiculo['placa_veiculo'] ?></p>
                    </div>
                    <div>
                        <p>Marca</p>
                        <p><?php echo $veiculo['marca_veiculo'] ?></p>
                    </div>
                    <div>
                        <p>Quantidade de lugares</p>
                        <p><?php echo $veiculo['qtdLugares_veiculo'] ?></p>
                    </div>
                    <div>
                        <p>Situação</p>
                        <p><?php echo $veiculo['situacao_veiculo'] ?></p>
                    </div>
                </div>
            </div>
            <?php } ?>
        </section>
        <a href="/cadastro/veiculo"><button class="input">Cadastrar novo veículo</button></a>
    </main>
    <?php require './Application/views/headers/footerEmp.php'?>
</body>

</html>