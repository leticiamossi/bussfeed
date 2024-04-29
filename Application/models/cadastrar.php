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
}

?>