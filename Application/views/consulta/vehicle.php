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
    <br>
    <main>
        <h3>Meus Veículos</h3>
        <br>
        <section class="veiculos">
            <?php foreach($data['veiculos'] as $veiculo){ ?>
            <div>
                <div class="info">
                    <h4><?php echo $veiculo['modelo_veiculo'] ?></h4>
                    <p>Status: <?php echo $veiculo['status_veiculo'] ?></p>
                </div>
                <div>
                    <div class="info">
                        <p>Modelo</p>
                        <p><?php echo $veiculo['modelo_veiculo'] ?></p>
                    </div>
                    <div class="info">
                        <p>Placa</p>
                        <p><?php echo $veiculo['placa_veiculo'] ?></p>
                    </div>
                    <div class="info">
                        <p>Marca</p>
                        <p><?php echo $veiculo['marca_veiculo'] ?></p>
                    </div>
                    <div class="info">
                        <p>Quantidade de lugares</p>
                        <p><?php echo $veiculo['qtdLugares_veiculo'] ?></p>
                    </div>
                    <div class="info">
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