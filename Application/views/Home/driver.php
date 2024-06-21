<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>BussFeed | Home</title>
    <link rel="stylesheet" href="../../public/assets/css/style.css">
</head>

<body>
    <header>
        <a href="/login/logout" class="input">Sair</a>
    </header>
    <main>
        <section class="sec">
            <p>Hoje,
                <?php
                date_default_timezone_set('America/Bahia');
                echo date("d/m");
                ?>
            </p>
            <?php foreach ($data['viagens'] as $viagem) { ?>
                <a href="/viagem/pontos/<?php echo $viagem['id_viagem'] ?>">
                    <div>
                        <p>Veiculo: <?php echo $viagem['modelo_veiculo'] . " (" . $viagem['placa_veiculo'] . ")" ?></p>
                        <p>Destino: <?php echo $viagem['destino_viagem'] ?></p>
                    </div>
                <?php } ?>
                </a>
        </section>
        <section>
            <a href="#">
                <div>
                    <!--Botão-->
                    <p class="input">Minhas viagens</p>
                </div>
            </a>
        </section>
    </main>
</body>

</html>