<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>BussFeed | Motoristas</title>
    <link rel="stylesheet" href="../../public/assets/css/style.css">
</head>

<body>
    <header></header>
    <main>
        <h3>Meus Motoristas</h3>
        <section>
            <?php foreach($data['motoristas'] as $motorista){?>
            <div>
                <div>
                    <h4><?php echo $motorista['nome_motorista']?></h4>
                </div>
                <div>
                    <div>
                        <p>Telefone</p>
                        <p><?php echo $motorista['telefone_motorista']?></p>
                    </div>
                    <div>
                        <p>CPF</p>
                        <p><?php echo $motorista['cpf_motorista']?></p>
                    </div>
                    <div>
                        <p>CNH</p>
                        <p><?php echo $motorista['cnh_motorista']?></p>
                    </div>
                    <div>
                        <p>Categoria CNH</p>
                        <p><?php echo $motorista['categoriaCnh_motorista']?></p>
                    </div>
                </div>
                <?php } ?>
            </div>
        </section>
        <a href="/cadastro/motorista"><button>Cadastrar novo motorista</button></a>
    </main>
</body>

</html>