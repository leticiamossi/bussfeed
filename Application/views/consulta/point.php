<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>BussFeed | Pontos</title>
    <link rel="stylesheet" href="../../public/assets/css/style.css">
</head>

<body>
    <header></header>
    <main>
        <h3>Meus Pontos</h3>
        <section>
            <?php foreach($data['pontos'] as $ponto){?>
            <div>
                <div>
                    <h4><?php echo $ponto['apelido_pontoEspera'] ?></h4>
                </div>
                <div>
                    <div>
                        <p>Rua</p>
                        <p><?php echo $ponto['rua_pontoEspera'] ?></p>
                    </div>
                    <div>
                        <p>Bairro</p>
                        <p><?php echo $ponto['bairro_pontoEspera'] ?></p>
                    </div>
                    <div>
                        <p>Cidade</p>
                        <p><?php echo $ponto['cidade_pontoEspera'] ?></p>
                    </div>
                    <div>
                        <p>Hora</p>
                        <p><?php echo $ponto['hora_pontoEspera'] ?></p>
                    </div>
                    <div>
                        <p>Ponto de Referência</p>
                        <p><?php echo $ponto['pontoReferencia_pontoEspera'] ?></p>
                    </div>
                </div>
                <?php } ?>
            </div>
        </section>
        <a href="/cadastro/ponto"><button>Cadastrar novo ponto</button></a>
    </main>
</body>

</html>