<!DOCTYPE html>
<html lang="pt-br">
<?php
date_default_timezone_set('America/Bahia');
?>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>BussFeed | Home</title>
    <link rel="stylesheet" href="../../public/assets/css/styleHome.css">
</head>

<body>
    <?php require './Application/views/headers/headerPas.php'?>
    <main>
        <div>
            <h3 class="boas-vindas">Olá, <?php echo $_SESSION['NOME']?></h3>
        </div>
        <section class="sec">
        <div>
                <h3>Hoje, 
                    <?php 
                    date_default_timezone_set('America/Bahia');
                    echo date("d/m");
                    ?>
                    </h3>
            </div>
            <?php foreach ($data['viagens'] as $viagem) { ?>
                <a href="/viagem/passageiro/<?php echo $viagem['id_viagem']; ?>">
                    <div class="btn-home">
                        <!--Botão-->
                        <p>Viagem de Hoje</p>
                        <p>Destino: <?php echo $viagem['destino_viagem']; ?></p>
                    </div>
                </a>
            <?php } ?>
        </section>
        <section class="sec">
            <h3>Perfil</h3>
            <a href="/consulta/viagemPassageiro">
                <div class="btn-home">
                    <!--Botão-->
                    <p>Minhas viagens</p>
                </div>
            </a>
        </section>
    </main>
    <?php require './Application/views/headers/footerPas.php'?>
</body>

</html>