<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>BussFeed | Home</title>
    <link rel="stylesheet" href="public\assets\css\style.css">
</head>
<body>
    <header>
        <a href="/login/logout">Sair</a>
    </header>
    <main>
        <section>
            <div>
                <p>Hoje, 
                    <?php 
                    date_default_timezone_set('America/Bahia');
                    echo date("d/m");
                    ?>
                    </p>
                <p>Estimativa: 20 pessoas</p>
            </div>
            <a href="/viagem/criar">
                <div>
                    <!--Botão-->
                    <p>Criar Viagem</p>
                </div>
            </a>
            <a href="/viagem/empresa">
                <div>
                    <!--Botão-->
                    <p>Viagem de Hoje</p>
                    <p>45</p>
                </div>
            </a>
        </section>
        <section>
            <a href="/perfil/empresa">
                <div>
                    <!--Botão-->
                    <p>Meu Perfil</p>
                </div>
            </a>
            <a href="/solicitacoes">
                <div>
                    <!--Botão-->
                    <p>Solicitações</p>
                </div>
            </a>
            <a href="/consulta/viagens">
                <div>
                    <!--Botão-->
                    <p>Minhas Viagens</p>
                </div>
            </a>
        </section>
        <section>
            <h3>Cadastros e alterações</h3>
            <a href="/consulta/veiculo">
                <div>
                    <!--Botão-->
                    <p>Veículo</p>
                </div>
            </a>
            <a href="/consulta/motorista">
                <div>
                    <!--Botão-->
                    <p>Motorista</p>
                </div>
            </a>
            <a href="/consulta/ponto">
                <div>
                    <!--Botão-->
                    <p>Pontos</p>
                </div>
            </a>
            <a href="#">
                <div>
                    <!--Botão-->
                    <p>Minhas viagens</p>
                </div>
            </a>
        </section>
    </main>
</body>

</html>