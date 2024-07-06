<!DOCTYPE html>
<html lang="pt-br">
<?php
date_default_timezone_set('America/Bahia');
?>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>BussFeed | Viagem</title>
    <link rel="stylesheet" href="public\assets\css\stylePassageiro.css">
</head>
<body>
<?php require './Application/views/headers/headerPas.php'?>
    <main class="confirmaPonto">
        <p class="viagemPonto">Viagem <?php echo date("d/m/y")?></p>
        <form action="/confirmar/passageiro/<?php echo $data['id'] ?>" method="POST" class="formPonto">
            <div>
                <label for="ponto">Selecione o ponto</label>
                <select name="ponto" id="ponto" required class="inputConfirma">
                    <?php foreach($data['pontos'] as $ponto) { ?>
                    <option value="<?php echo $ponto['id_pontoEspera'] ?>"><?php echo $ponto['apelido_pontoEspera'] ?></option>
                    <?php } ?>
                </select>
            </div>
            <br>
            <input type="submit" value="Confirmar" class="inputConfirma">
        </form>
    </main>
<?php require './Application/views/headers/footerPas.php'?>
</body>
</html>