<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>BussFeed | Solicitações</title>
    <link rel="stylesheet" href="../../../public/assets/css/styleSolicitacoes.css">
</head>
<body>
    <?php require './Application/views/headers/headerEmp.php'?>
    <header>
        <br>
    </header>
    <main>
       <h3>Minhas Solicitações</h3>
       <br>
       <div class="solicitacao">
        <?php foreach($data['solicitacoes'] as $solicitacao) { ?>
            <div>
                <h5><?php echo $solicitacao['nome_aluno'] ?></h5>
                <p><?php echo $solicitacao['cpf_aluno'] ?></p>
                <div>
                    <a href="/solicitacoes/resposta/<?php echo $solicitacao['id_alunoEmpresa'] ?>/0"><button class="input">Recusar</button></a>
                    <a href="/solicitacoes/resposta/<?php echo $solicitacao['id_alunoEmpresa'] ?>/1"><button class="input">Aceitar</button></a>
                </div>
            </div>
        <?php } ?>
       </div>
    </main>
    <?php require './Application/views/headers/footerEmp.php'?>
</body>

</html>