<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>BussFeed | Pontos</title>
    <link rel="stylesheet" href="../../public/assets/css/stylePonto.css">
</head>

<body>
<?php require './Application/views/headers/headerEmp.php'?>
    <header></header>
    <main>
        <h3>Meus Pontos</h3>
        <section class="pontodiv">
            <?php foreach($data['pontos'] as $ponto){?>
            <div>
                <div class="info">
                    <h4><?php echo $ponto['apelido_pontoEspera'] ?></h4>
                </div>
                <div>
                    <div class="info">
                        <p>Rua</p>
                        <p><?php echo $ponto['rua_pontoEspera'] ?></p>
                    </div>
                    <div class="info">
                        <p>Bairro</p>
                        <p><?php echo $ponto['bairro_pontoEspera'] ?></p>
                    </div>
                    <div class="info">
                        <p>Cidade</p>
                        <p><?php echo $ponto['cidade_pontoEspera'] ?></p>
                    </div>
                    <div class="info">
                        <p>Hora</p>
                        <p><?php echo $ponto['hora_pontoEspera'] ?></p>
                    </div>
                    <div class="info">
                        <p>Ponto de Referência</p>
                        <p><?php echo $ponto['pontoReferencia_pontoEspera'] ?></p>
                    </div>
                </div>
                <?php } ?>
            </div>
        </section>
        <a href="/cadastro/ponto"><button class="input">Cadastrar novo ponto</button></a>
    </main>
    <img src="\public\assets\img\person1.png" alt="motorista" class="ponto"><br>
<?php require './Application/views/headers/footerEmp.php'?>
</body>

</html>