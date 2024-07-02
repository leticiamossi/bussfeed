<?php
// Arquivo de insert dos cadastros 

namespace Application\models;

use Application\core\Database;
use PDO;

class Cadastrar 
{
    // Insere o usuario
    public static function insertUsuario(string $email, string $senha, string $nivel)
    {
        $conn = new Database();
        $result = $conn->executeQuery("INSERT INTO tb_usuarios(email_usuario, senha_usuario, nivel_usuario) VALUES (:EMAIL, SHA1(:SENHA), :NIVEL)",
                                array(':EMAIL' => $email, ':SENHA' => $senha, ':NIVEL' => $nivel));
        return $result->rowCount();
    }

    // Insere a empresa
    public static function insertEmpresa(string $nome, string $resp, string $cnpj, string $email, string $senha, string $tel, string $token, string $validade) 
    {
        $conn = new Database();
        $result = $conn->executeQuery("INSERT INTO tb_empresa(nome_empresa, responsavel_empresa, cnpj_empresa, email_empresa, senha_empresa, telefone_empresa, status_empresa, token_empresa, validade_empresa) VALUES (:NOME, :RESP, :CNPJ, :EMAIL, SHA1(:SENHA), :TEL, '1', :TOKEN, :VALID)",
                                array(':NOME' => $nome, ':RESP' => $resp, ':CNPJ' => $cnpj, ':EMAIL' => $email, ':SENHA' => $senha, ':TEL' => $tel, ':TOKEN' => $token, ':VALID' => $validade));
        return $result->rowCount();
    }

    // Insere o motorista
    public static function insertMotorista(string $id, string  $nome, string $email, string $senha, string $cpf, string $cnh, string $cat, string $tel)
    {
        $conn = new Database();
        $result = $conn->executeQuery("INSERT INTO tb_motorista(empresa_id, nome_motorista, email_motorista, senha_motorista, cpf_motorista, cnh_motorista, categoriaCnh_motorista, telefone_motorista) VALUES (:ID, :NOME, :EMAIL, SHA1(:SENHA), :CPF, :CNH, :CAT, :TEL)",
                                array(':ID' => $id, ':NOME' => $nome, ':EMAIL' => $email, ':SENHA' => $senha, ':CPF' => $cpf, ':CNH' => $cnh, ':CAT' => $cat, ':TEL' => $tel));
        return $result->rowCount();
    }

    // Insere o passageiro
    public static function insertPassageiro(string $nome, string $cpf, string $tel, string $email, string $senha, string $instituicao, string $ano)
    {
        $conn = new Database();
        $result = $conn->executeQuery("INSERT INTO tb_aluno(nome_aluno, cpf_aluno, telefone_aluno, email_aluno, senha_aluno, instituição_aluno, ingresso_aluno) VALUES (:NOME, :CPF, :TEL, :EMAIL, SHA1(:SENHA), :INST, :ANO)",
                                array(':NOME' => $nome, ':CPF' => $cpf, ':TEL' => $tel, ':EMAIL' => $email, ':SENHA' => $senha, ':INST' => $instituicao, ':ANO' => $ano));
        $select = $conn->executeQuery("SELECT id_aluno FROM tb_aluno WHERE cpf_aluno = :CPF LIMIT 1", array(':CPF' => $cpf));
        return $select->fetchAll(PDO::FETCH_ASSOC);
    }

    // Insere o endereço
    public static function insertEndereco(string $rua, string $num, string $bairro, string $cidade, string $estado, string $cep, string $idAluno)
    {
        $conn = new Database();
        $result = $conn->executeQuery("INSERT INTO tb_endereco(rua_endereco, numero_endereco, bairro_endereco, cidade_endereco, estado_endereco, cep_endereco, aluno_id) VALUES (:RUA, :NUM, :BAIRRO, :CIDADE, :ESTADO, :CEP, :ID)",
                                array(':RUA' => $rua, ':NUM' => $num, ':BAIRRO' => $bairro, ':CIDADE' => $cidade, ':ESTADO' => $estado, ':CEP' => $cep, ':ID' => $idAluno));
        return $result->fetchAll(PDO::FETCH_ASSOC);
    }

    // Insere a solicitacao
    public static function insertSolicitacao(string $codigo, string $aluno, string $solicitacao, string $expiracao)
    {
        $conn = new Database();
        $result = $conn->executeQuery("INSERT INTO tb_alunoempresa(empresa_id, aluno_id, dataSolicitacao_alunoEmpresa, dataExpiracao_alunoEmpresa, status_alunoEmpresa) VALUES ((SELECT id_empresa FROM tb_empresa WHERE token_empresa = :COD), :ALUNO, :SOLICITACAO, :EXPIRACAO, '0')",
                                array(':COD' => $codigo, ':ALUNO' => $aluno, ':SOLICITACAO' => $solicitacao, ':EXPIRACAO' => $expiracao));
        return $result->rowCount();
    }

    // Insere o veiculo
    public static function insertVeiculo(string $empresa, string $modelo, string $placa, string $marca, string $situacao, string $lugares, string $status)
    {
        $conn = new Database();
        $result = $conn->executeQuery("INSERT INTO tb_veiculo(empresa_id, modelo_veiculo, placa_veiculo, marca_veiculo, situacao_veiculo, qtdLugares_veiculo, status_veiculo) VALUES (:EMP, :MOD, :PLACA, :MARCA, :SIT, :LUG, :STAT)",
                                array(':EMP' => $empresa, ':MOD' => $modelo, ':PLACA' => $placa, ':MARCA' => $marca, ':SIT' => $situacao, ':LUG' => $lugares, ':STAT' => $status));
        return $result->rowCount();
    }

    // Insere o ponto
    public static function insertPonto(string $id, string $apelido, string $rua, string $bairro, string $cidade, string $ponto, string $hora)
    {
        $conn = new Database();
        $result = $conn->executeQuery("INSERT INTO tb_pontoEspera(empresa_id, apelido_pontoEspera, rua_pontoEspera, bairro_pontoEspera, cidade_pontoEspera, pontoReferencia_pontoEspera, hora_pontoEspera) VALUES (:ID, :APEL, :RUA, :BAIRRO, :CIDADE, :PONTO, :HORA)",
                                array(':ID' => $id, ':APEL' => $apelido, ':RUA' => $rua, ':BAIRRO' => $bairro, ':CIDADE' => $cidade, ':PONTO' => $ponto, ':HORA' => $hora));
        return $result->rowCount();
    }
}

?>