<?php

namespace Application\models;

use Application\core\Database;
use PDO;

class Consulta 
{
    public static function listPontos(string $id)
    {
        $conn = new Database();
        $result = $conn->executeQuery("SELECT * FROM tb_pontoespera WHERE empresa_id = :ID", array(':ID' => $id));
        return $result->fetchAll(PDO::FETCH_ASSOC);
    }

    public static function listMotoristas(string $id)
    {
        $conn = new Database();
        $result = $conn->executeQuery("SELECT * FROM tb_motorista WHERE empresa_id = :ID", array(':ID' => $id));
        return $result->fetchAll(PDO::FETCH_ASSOC);
    }

    public static function listVeiculos(string $id)
    {
        $conn = new Database();
        $result = $conn->executeQuery("SELECT * FROM tb_veiculo WHERE empresa_id = :ID", array(':ID' => $id));
        return $result->fetchAll(PDO::FETCH_ASSOC);
    }

    public static function listViagemEmp(string $id)
    {
        $conn = new Database();
        $result = $conn->executeQuery("SELECT * FROM tb_viagem AS v 
                                    JOIN tb_veiculosmotoristaviagem AS vmv ON v.id_viagem = vmv.id_viagem
                                    JOIN tb_veiculo AS veic ON vmv.id_veiculo = veic.id_veiculo
                                    JOIN tb_motorista AS m ON vmv.id_motorista = m.id_motorista
                                    WHERE v.empresa_id = :ID && v.status_viagem = '0'
                                    ORDER BY v.dataViagem_viagem", array(':ID' => $id));
        return $result->fetchAll(PDO::FETCH_ASSOC);
    }
}

?>