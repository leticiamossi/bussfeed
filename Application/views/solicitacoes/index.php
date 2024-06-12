<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>BussFeed | Solicitações</title>
    <link rel="stylesheet" href="../../../public/assets/css/style.css">
</head>
<body>
    <header>
        <a href="/login/logout">Sair</a>
    </header>
    <main>
       <h3>Minhas Solicitações</h3>
       <div>
        <?php foreach($data['solicitacoes'] as $solicitacao) { ?>
            <div>
                <h5><?php echo $solicitacao['nome_aluno'] ?></h5>
                <p><?php echo $solicitacao['cpf_aluno'] ?></p>
                <div>
                    <a href="/solicitacoes/resposta/<?php echo $solicitacao['id_alunoEmpresa'] ?>/0"><button>Recusar</button></a>
                    <a href="/solicitacoes/resposta/<?php echo $solicitacao['id_alunoEmpresa'] ?>/1"><button>Aceitar</button></a>
                </div>
            </div>
        <?php } ?>
       </div>
    </main>
</body>

</html>