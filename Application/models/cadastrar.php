<?php

namespace Application\models;

use Application\core\Database;
use PDO;

class Cadastrar 
{
    public static function insertEmpresa(string $nome, string $resp, string $cnpj, string $email, string $senha, string $tel, string $token) 
    {
        $conn = new Database();
        $result = $conn->executeQuery("INSERT INTO tb_empresa(nome_empresa, responsavel_empresa, cnpj_empresa, email_empresa, senha_empresa, telefone_empresa, status_empresa, token_empresa VALUES (:NOME, :RESP, :CNPJ, :EMAIL, :SENHA, :TEL, '1', :TOKEN)",
                                array(':NOME' => $nome, ':RESP' => $resp, ':CNPJ' => $cnpj, ':EMAIL' => $email, ':SENHA' => $senha, ':TEL' => $tel, ':TOKEN' => $token));
        return $result->rowCount();
    }

    public static function insertMotorista(string $id, string  $nome, string $email, string $senha, string $cpf, string $cnh, string $cat, string $tel)
    {
        $conn = new Database();
        $result = $conn->executeQuery("INSERT INTO tb_motorista(empresa_id, nome_motorista, email_motorista, senha_motorista, cpf_motorista, cnh_motorista, categoriaCnh_motorista, telefone_motorista) VALUES (:ID, :NOME, :EMAIL, :SENHA, :CPF, :CNH, :CAT, :TEL)",
                                array(':ID' => $id, ':NOME' => $nome, ':EMAIL' => $email, ':SENHA' => $senha, ':CPF' => $cpf, ':CNH' => $cnh, ':CAT' => $cat, ':TEL' => $tel));
        return $result->rowCount();
    }
}

?>