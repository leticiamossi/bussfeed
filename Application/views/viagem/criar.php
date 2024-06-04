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
        <form action="/viagem/criada" method="POST">
            <div>
                <label for="destino">Destino</label>
                <input type="text" name="destino" id="data">
            </div>
            <div>
                <label for="data">Data</label>
                <input type="date" name="data" id="data">
            </div>
            <input type="submit" value="Criar">
        </form>
    </main>
</body>
</html>