<?php
// Arquivo de select para o sistema de login

namespace Application\models;

use Application\core\Database;
use PDO;

class Login
{
    // Consulta o nivel de acesso
    public static function findNivelUser(string $email, string $senha)
    {
        $conn = new Database();
        $result = $conn->executeQuery("SELECT nivel_usuario FROM tb_usuarios WHERE email_usuario = :EMAIL && senha_usuario = SHA1(:SENHA)",
                                array(':EMAIL' => $email, ':SENHA' => $senha));
        return $result->fetchAll(PDO::FETCH_ASSOC);
    }

    // Consulta as informações da empresa
    public static function findEmpresa(string $email, string $senha)
    {
        $conn = new Database();
        $result = $conn->executeQuery("SELECT * FROM tb_empresa WHERE email_empresa = :EMAIL && senha_empresa = SHA1(:SENHA)",
                                array(':EMAIL' => $email, ':SENHA' => $senha));
        return $result->fetchAll(PDO::FETCH_ASSOC);
    }

    // Consulta as informações do passageiro
    public static function findPassageiro(string $email, string $senha)
    {
        $conn = new Database();
        $result = $conn->executeQuery("SELECT * FROM tb_aluno WHERE email_aluno = :EMAIL && senha_aluno = SHA1(:SENHA)",
                                array(':EMAIL' => $email, ':SENHA' => $senha));
        return $result->fetchAll(PDO::FETCH_ASSOC);
    }

    // Consulta a empresa relacionada ao passageiro
    public static function findEmpresaPassageiro(string $email, string $senha)
    {
        $conn = new Database();
        $result = $conn->executeQuery("SELECT ae.empresa_id FROM tb_alunoempresa AS ae JOIN tb_aluno AS a ON ae.aluno_id = a.id_aluno WHERE a.email_aluno = :EMAIL && a.senha_aluno = SHA1(:SENHA)",
                                array(':EMAIL' => $email, ':SENHA' => $senha));
        return $result->fetchAll(PDO::FETCH_ASSOC);
    }

    // COnsulta as informações do motorista
    public static function findMotorista(string $email, string $senha)
    {
        $conn = new Database();
        $result = $conn->executeQuery("SELECT * FROM tb_motorista WHERE email_motorista = :EMAIL && senha_motorista = SHA1(:SENHA)",
                                array(':EMAIL' => $email, ':SENHA' => $senha));
        return $result->fetchAll(PDO::FETCH_ASSOC);
    }
}

?>