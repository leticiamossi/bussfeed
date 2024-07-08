<?php
// Arquivo de select no banco para as consultas

namespace Application\models;

use Application\core\Database;
use PDO;

class Consulta 
{
    // Lista todos os pontos da empresa
    public static function listPontos(string $id)
    {
        $conn = new Database();
        $result = $conn->executeQuery("SELECT * FROM tb_pontoespera WHERE empresa_id = :ID", array(':ID' => $id));
        return $result->fetchAll(PDO::FETCH_ASSOC);
    }

    // Lista os motoristas da empresa
    public static function listMotoristas(string $id)
    {
        $conn = new Database();
        $result = $conn->executeQuery("SELECT * FROM tb_motorista WHERE empresa_id = :ID", array(':ID' => $id));
        return $result->fetchAll(PDO::FETCH_ASSOC);
    }

    // Lista os veiculos da empresa
    public static function listVeiculos(string $id)
    {
        $conn = new Database();
        $result = $conn->executeQuery("SELECT * FROM tb_veiculo WHERE empresa_id = :ID", array(':ID' => $id));
        return $result->fetchAll(PDO::FETCH_ASSOC);
    }

    // Lista as viagens da empresa
    public static function listViagemEmp(string $id)
    {
        $conn = new Database();
        $result = $conn->executeQuery("SELECT * FROM tb_viagem AS v 
                                    JOIN tb_veiculosmotoristaviagem AS vmv ON v.id_viagem = vmv.id_viagem
                                    JOIN tb_veiculo AS veic ON vmv.id_veiculo = veic.id_veiculo
                                    JOIN tb_motorista AS m ON vmv.id_motorista = m.id_motorista
                                    WHERE v.empresa_id = :ID && v.status_viagem = '0'
                                    ORDER BY v.dataViagem_viagem DESC", array(':ID' => $id));
        return $result->fetchAll(PDO::FETCH_ASSOC);
    }

    // Lista as viagens do passageiro
    public static function listViagemPas(string $id)
    {
        $conn = new Database();
        $result = $conn->executeQuery("SELECT * FROM tb_viagem AS v 
                                    JOIN tb_veiculosmotoristaviagem AS vmv ON v.id_viagem = vmv.id_viagem
                                    JOIN tb_veiculo AS veic ON vmv.id_veiculo = veic.id_veiculo
                                    JOIN tb_motorista AS m ON vmv.id_motorista = m.id_motorista
                                    JOIN tb_pontoesperaaluno AS pea ON pea.idviagem = v.id_viagem
                                    WHERE pea.idaluno = :ID && v.status_viagem = '0'
                                    ORDER BY v.dataViagem_viagem DESC", array(':ID' => $id));
        return $result->fetchAll(PDO::FETCH_ASSOC);
    }

    // Lista as viagens da empresa
    public static function listViagemMot(string $id)
    {
        $conn = new Database();
        $result = $conn->executeQuery("SELECT * FROM tb_viagem AS v 
                                    JOIN tb_veiculosmotoristaviagem AS vmv ON v.id_viagem = vmv.id_viagem
                                    JOIN tb_veiculo AS veic ON vmv.id_veiculo = veic.id_veiculo
                                    JOIN tb_motorista AS m ON vmv.id_motorista = m.id_motorista
                                    WHERE vmv.id_motorista = :ID && v.status_viagem = '0'
                                    ORDER BY v.dataViagem_viagem DESC", array(':ID' => $id));
        return $result->fetchAll(PDO::FETCH_ASSOC);
    }
}

?>