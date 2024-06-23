<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>BussFeed | Home</title>
    <link rel="stylesheet" href="../../public/assets/css/styleHome.css">
</head>

<body>
    <?php require './Application/views/headers/headerDriver.php'?>
    <main>
        <div>
            <h3 class="boas-vindas">Olá, <?php echo $_SESSION['NOME']?></h3>
        </div>
        <section class="sec">
            <h3>Hoje,
                <?php
                date_default_timezone_set('America/Bahia');
                echo date("d/m");
                ?>
            </h3>
            <?php foreach ($data['viagens'] as $viagem) { ?>
                <a href="/viagem/pontos/<?php echo $viagem['id_viagem'] ?>">
                    <div class="btn-home">
                        <p>Veiculo: <?php echo $viagem['modelo_veiculo'] . " (" . $viagem['placa_veiculo'] . ")" ?></p>
                        <p>Destino: <?php echo $viagem['destino_viagem'] ?></p>
                    </div>
                <?php } ?>
                </a>
        </section>
        <section class="sec">
            <h3>Perfil</h3>
            <a href="/consulta/viagemMotorista">
                <div class="btn-home">
                    <!--Botão-->
                    <p class="input">Minhas viagens</p>
                </div>
            </a>
        </section>
    </main>
    <?php require './Application/views/headers/footerDriver.php'?>
</body>

</html>