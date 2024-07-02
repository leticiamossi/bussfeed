<?php
// Arquivo de select e insert para as solicitacoes

namespace Application\models;

use Application\core\Database;
use PDO;

class Solicitacoes
{
    // Lista as solicitações pendentes
    public static function listSolicitacoes(string $id)
    {
        $conn = new Database();
        $result = $conn->executeQuery("SELECT a.*, ae.* FROM tb_alunoEmpresa AS ae JOIN tb_aluno AS a ON ae.aluno_id = a.id_aluno WHERE empresa_id = :ID && (status_alunoEmpresa = '0' && isnull(dataConfirmacao_alunoEmpresa))", array(':ID' => $id));
        return $result->fetchAll(PDO::FETCH_ASSOC);
    }

    // Insere a resposta da empresa
    public static function insertResposta(string $id, string $resposta)
    {
        $conn = new Database();
        $result = $conn->executeQuery("UPDATE tb_alunoEmpresa SET dataConfirmacao_alunoEmpresa = CURDATE(), status_alunoEmpresa = :RESP WHERE id_alunoEmpresa = :ID",
                                        array(':RESP' => $resposta, ':ID' => $id));
        return $result->fetchAll(PDO::FETCH_ASSOC);
    }
}

?>