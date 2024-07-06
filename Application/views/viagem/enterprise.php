<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bussfeed</title>
    <link rel="stylesheet" href="../../public/assets/css/styleHome.css">
</head>
<body>
    <?php require './Application/views/headers/headerEmp.php'?>
    <main class="empresaViagem">
        <h2>Viagem para <?php echo $data['pontos']['0']['destino_viagem'] ?></h2>
        <h4>Pontos:</h4>
        <?php
        foreach($data['pontos'] as $ponto){
        ?>
        <div class="pontoEmpresa">
            <p><?php echo $ponto['apelido_pontoEspera'] ?></p>
            <p>Qnt: <?php echo $ponto['qtn_pontoEspera'] ?></p>
        </div>
        <?php
        }
        ?>
        <a href="/viagem/confirmacao/<?php echo $data['id'] ?>"><button class="input">Fechar Viagem</button></a>
    </main>
    <?php require './Application/views/headers/footerEmp.php'?>
</body>
</html>