<?php

namespace Application\models;

use Application\core\Database;
use PDO;

class Home 
{
    public static function listViagens(string $idEmpresa)
    {
        $conn = new Database();
        $result = $conn->executeQuery("SELECT * FROM tb_viagem WHERE dataViagem_viagem = CURDATE() && (empresa_id = :ID && status_viagem = '1')", array(':ID' => $idEmpresa));
        return $result->fetchAll(PDO::FETCH_ASSOC);
    }

    public static function listViagensConfirm(string $idAluno)
    {
        $conn = new Database();
        $result = $conn->executeQuery("SELECT idviagem FROM tb_pontoesperaaluno WHERE idaluno = :ID", array(':ID' => $idAluno));
        return $result->fetchAll(PDO::FETCH_ASSOC);
    }

    public static function listViagemMot(string $idMot)
    {
        $conn = new Database();
        $result = $conn->executeQuery("SELECT * FROM tb_motorista AS m
                                        JOIN tb_veiculosmotoristaviagem AS vmv ON vmv.id_motorista = m.id_motorista
                                        JOIN tb_viagem AS v ON vmv.id_viagem = v.id_viagem
                                        JOIN tb_veiculo AS veic ON vmv.id_veiculo - veic.id_veiculo
                                        WHERE m.id_motorista = :ID", array(':ID' => $idMot));
        return $result->fetchAll(PDO::FETCH_ASSOC);
    }
}

?>