<?php

namespace Application\models;

use Application\core\Database;
use PDO;

class Viagem
{
    public static function insertCriacaoViagem(string $destino, string $data, string $id)
    {
        $conn = new Database();
        $result = $conn->executeQuery("INSERT INTO tb_viagem(destino_viagem, dataViagem_viagem, empresa_id, status_viagem) VALUES (:DEST, :DAT, :ID, '1')",
                            array(':DEST' => $destino, ':DAT' => $data, ':ID' => $id));
        $result->rowCount();
    }

    public static function confirmarViagem(string $viagem, string $aluno, string $ponto)
    {
        $conn = new Database();
        $result = $conn->executeQuery("INSERT INTO tb_pontoesperaaluno(idaluno, idpontoEspera, idviagem) VALUES (:ALU, :PONT, :VIAG)",
                                                array(':ALU' => $aluno, ':PONT' => $ponto, ':VIAG' => $viagem));
        return $result->fetchAll(PDO::FETCH_ASSOC);
    }

    public static function listViagemEspecifica(string $id)
    {
        $conn = new Database();
        $result = $conn->executeQuery("SELECT pe.apelido_pontoEspera, COUNT(pe.apelido_pontoEspera) AS qtn_pontoEspera, v.destino_viagem FROM tb_pontoesperaaluno AS pea JOIN tb_aluno AS a ON pea.idaluno = a.id_aluno
                                        JOIN tb_pontoespera AS pe ON pea.idpontoespera = pe.id_pontoEspera 
                                        JOIN tb_viagem AS v ON v.id_viagem = pea.idviagem
                                        WHERE pea.idviagem = :ID GROUP BY pe.apelido_pontoEspera", array(':ID' => $id));
        return $result->fetchAll(PDO::FETCH_ASSOC);
    }

    public static function fecharViagem(string $id)
    {
        $conn = new Database;
        $result = $conn->executeQuery("UPDATE tb_viagem SET status_viagem = '0' WHERE id_viagem = :ID", array(':ID' => $id));
        return $result->fetchAll(PDO::FETCH_ASSOC);
    }

    public static function listVeiculos(string $id)
    {
        $conn = new Database();
        $result = $conn->executeQuery("SELECT * FROM tb_veiculo WHERE empresa_id = :ID", array(':ID' => $id));
        return $result->fetchAll(PDO::FETCH_ASSOC);
    }

    public static function listMotoristas(string $id)
    {
        $conn = new Database();
        $result = $conn->executeQuery("SELECT * FROM tb_motorista WHERE empresa_id = :ID", array(':ID' => $id));
        return $result->fetchAll(PDO::FETCH_ASSOC);
    }

    public static function countPassageiros(string $id)
    {
        $conn = new Database();
        $result = $conn->executeQuery("SELECT COUNT(idaluno) AS qtd FROM tb_pontoesperaaluno WHERE idviagem = :ID", array(':ID' => $id));
        return $result->fetchAll(PDO::FETCH_ASSOC);
    }

    public static function countAssentos(string $id)
    {
        $conn = new Database();
        $result = $conn->executeQuery("SELECT * FROM tb_veiculosmotoristaviagem AS vm
                                            JOIN tb_veiculo AS v ON vm.id_veiculo = v.id_veiculo
                                            WHERE vm.id_viagem = :ID", array(':ID' => $id));
        return $result->fetchAll(PDO::FETCH_ASSOC);
    }

    public static function insertVeiculoMotorista(string $id, string $motorista, string $veiculo)
    {
        $conn = new Database();
        $result = $conn->executeQuery("INSERT INTO tb_veiculosmotoristaviagem(id_viagem, id_motorista, id_veiculo) VALUES (:ID, :MOT, :VEIC)",
                                        array(':ID'=> $id, ':MOT' => $motorista, ':VEIC' => $veiculo));
        return $result->fetchAll(PDO::FETCH_ASSOC);
    }
}

?>