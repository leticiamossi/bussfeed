<?php

namespace Application\models;

use Application\core\Database;
use Application\models;
use PDO;

class Login
{
    public static function findNivelUser(string $email, string $senha)
    {
        $conn = new Database();
        $result = $conn->executeQuery("SELECT nivel_usuario FROM tb_usuarios WHERE email_usuario = :EMAIL && senha_usuario = SHA1(:SENHA)",
                                array(':EMAIL' => $email, ':SENHA' => $senha));
        return $result->fetchAll(PDO::FETCH_ASSOC);
    }

    public static function findEmpresa(string $email, string $senha)
    {
        $conn = new Database();
        $result = $conn->executeQuery("SELECT * FROM tb_empresa WHERE email_empresa = :EMAIL && senha_empresa = SHA1(:SENHA)",
                                array(':EMAIL' => $email, ':SENHA' => $senha));
        return $result->fetchAll(PDO::FETCH_ASSOC);
    }

    public static function findPassageiro(string $email, string $senha)
    {
        $conn = new Database();
        $result = $conn->executeQuery("SELECT * FROM tb_aluno WHERE email_aluno = :EMAIL && senha_aluno = SHA1(:SENHA)",
                                array(':EMAIL' => $email, ':SENHA' => $senha));
        return $result->fetchAll(PDO::FETCH_ASSOC);
    }

    public static function findMotorista(string $email, string $senha)
    {
        $conn = new Database();
        $result = $conn->executeQuery("SELECT * FROM tb_motorista WHERE email_motorista = :EMAIL && senha_motorista = SHA1(:SENHA)",
                                array(':EMAIL' => $email, ':SENHA' => $senha));
        return $result->fetchAll(PDO::FETCH_ASSOC);
    }
}

?>