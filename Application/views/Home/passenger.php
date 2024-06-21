<!DOCTYPE html>
<html lang="pt-br">
<?php
date_default_timezone_set('America/Bahia');
?>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>BussFeed | Home</title>
    <link rel="stylesheet" href="../../public/assets/css/stylePassageiro.css">
</head>

<body>
    <header>
        <a href="/login/logout">Sair</a>
    </header>
    <main>
        <section>
            <?php foreach ($data['viagens'] as $viagem) { ?>
                <a href="/viagem/passageiro/<?php echo $viagem['id_viagem']; ?>">
                    <div>
                        <!--Botão-->
                        <p>Viagem de Hoje</p>
                        <p>Destino: <?php echo $viagem['destino_viagem']; ?></p>
                    </div>
                </a>
            <?php } ?>
        </section>
        <section>
            <a href="/consulta/viagemPassageiro">
                <div>
                    <!--Botão-->
                    <p>Minhas viagens</p>
                </div>
            </a>
            <a href="/perfil/passageiro">
                <div>
                    <!--Botão-->
                    <p>Meu perfil</p>
                </div>
            </a>
        </section>
    </main>
</body>

</html>