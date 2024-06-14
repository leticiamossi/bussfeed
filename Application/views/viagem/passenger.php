<!DOCTYPE html>
<html lang="pt-br">
<?php
date_default_timezone_set('America/Bahia');
?>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>BussFeed | Viagem</title>
    <link rel="stylesheet" href="public\assets\css\style.css">
</head>
<body>
    <header>
        <a href="/login/logout">Sair</a>        
    </header>
    <main>
        <p>Viagem <?php echo date("d/m/y")?></p>
        <form action="/confirmar/passageiro/<?php echo $data['id'] ?>" method="POST">
            <div>
                <label for="ponto">Selecione o ponto</label>
                <select name="ponto" id="ponto" required>
                    <?php foreach($data['pontos'] as $ponto) { ?>
                    <option value="<?php echo $ponto['id_pontoEspera'] ?>"><?php echo $ponto['apelido_pontoEspera'] ?></option>
                    <?php } ?>
                </select>
            </div>
            <input type="submit" value="Confirmar">
        </form>
    </main>
</body>
</html>