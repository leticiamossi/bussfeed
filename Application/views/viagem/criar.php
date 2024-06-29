<!DOCTYPE html>
<html lang="pt-br">
<?php
date_default_timezone_set('America/Bahia');
?>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>BussFeed | Viagem</title>
    <link rel="stylesheet" href="public\assets\css\styleHome.css">
</head>
<body>
<?php require './Application/views/headers/headerEmp.php'?>
    <main>
        <form action="/viagem/criada" method="POST" class="formCriar">
            <div>
                <label for="destino">Destino</label>
                <input type="text" name="destino" id="data" class="input">
            </div>
            <div>
                <label for="data">Data</label>
                <input type="date" name="data" id="data" class="input">
            </div>
            <br>
            <input type="submit" value="Criar" class="entrar">
        </form>
    </main>
    <?php require './Application/views/headers/footerEmp.php'?>
</body>
</html>