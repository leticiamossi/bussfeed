<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>BussFeed | Motoristas</title>
    <link rel="stylesheet" href="../../public/assets/css/styleMotorista.css">
</head>
<body>
<?php require './Application/views/headers/headerEmp.php'?>
    <main>
        <h3>Meus Motoristas</h3>
        <br>
        <section class="cadastroMotorista">
            <?php foreach($data['motoristas'] as $motorista){?>
            <div>
                <div class="info">
                    <h4><?php echo $motorista['nome_motorista']?></h4>
                </div>
                <div>
                    <div class="info">
                        <p>Telefone</p>
                        <p><?php echo $motorista['telefone_motorista']?></p>
                    </div>
                    <div class="info">
                        <p>CPF</p>
                        <p><?php echo $motorista['cpf_motorista']?></p>
                    </div>
                    <div class="info">
                        <p>CNH</p>
                        <p><?php echo $motorista['cnh_motorista']?></p>
                    </div>
                    <div class="info">
                        <p>Categoria CNH</p>
                        <p><?php echo $motorista['categoriaCnh_motorista']?></p>
                    </div>
                </div>
                <br>
                <?php } ?>
            </div>
        </section>
        <br>
        <a href="/cadastro/motorista"><button class="input">Cadastrar novo motorista</button></a>
    </main>
    <img src="\public\assets\img\person2.png" alt="motorista" class="image"><br>
<?php require './Application/views/headers/footerEmp.php'?>
</body>

</html>