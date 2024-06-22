<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>BussFeed | Home</title>
    <link rel="stylesheet" href="../../../public/assets/css/styleHome.css">
</head>
<body>
    <?php require './Application/views/headers/headerEmp.php'?>
    <main>
        <div>
            <h3 class="boas-vindas">Olá, <?php echo $_SESSION['EMP']?></h3>
            <p class="cod">Código: <?php echo $_SESSION['TOKEN']?></p>
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
            <a href="/viagem/criar">
                <div class="btn-home">
                    <!--Botão-->
                    <p>Criar Viagem</p>
                </div>
            </a>
            <?php foreach($data['viagens'] as $viagem){?>
            <a href="/viagem/empresa/<?php echo $viagem['id_viagem']; ?>">
                <div class="btn-home">
                    <!--Botão-->
                    <p>Viagem de Hoje</p>
                    <p>Destino: <?php echo $viagem['destino_viagem']; ?></p>
                </div>
            </a>
            <?php } ?>
        </section>
        <section class="sec">
            <h3>Meu Perfil</h3>
            <a href="/solicitacoes">
                <div  class="btn-home">
                    <!--Botão-->
                    <p>Solicitações</p>
                </div>
            </a>
            <a href="/consulta/viagemEmpresa">
                <div  class="btn-home">
                    <!--Botão-->
                    <p>Minhas Viagens</p>
                </div>
            </a>
        </section>
        <section class="sec">
            <h3>Cadastros</h3>
            <a href="/consulta/veiculos">
                <div class="btn-home">
                    <!--Botão-->
                    <p>Veículo</p>
                </div>
            </a>
            <a href="/consulta/motoristas   ">
                <div class="btn-home">
                    <!--Botão-->
                    <p>Motorista</p>
                </div>
            </a>
            <a href="/consulta/ponto">
                <div class="btn-home">
                    <!--Botão-->
                    <p>Pontos</p>
                </div>
            </a>
        </section>
    </main>
    <?php require './Application/views/headers/footerEmp.php'?>
</body>

</html>