<?php
// Arquivo de insert e select relacionada as viagens
namespace Application\models;

use Application\core\Database;
use PDO;

class Viagem
{
    // Insere a viagem criada pela empresa
    public static function insertCriacaoViagem(string $destino, string $data, string $id)
    {
        $conn = new Database();
        $result = $conn->executeQuery("INSERT INTO tb_viagem(destino_viagem, dataViagem_viagem, empresa_id, status_viagem) VALUES (:DEST, :DAT, :ID, '1')",
                            array(':DEST' => $destino, ':DAT' => $data, ':ID' => $id));
        $result->rowCount();
    }

    // Insere a confirmacao da viagem do passageiro
    public static function confirmarViagem(string $viagem, string $aluno, string $ponto)
    {
        $conn = new Database();
        $result = $conn->executeQuery("INSERT INTO tb_pontoesperaaluno(idaluno, idpontoEspera, idviagem) VALUES (:ALU, :PONT, :VIAG)",
                                                array(':ALU' => $aluno, ':PONT' => $ponto, ':VIAG' => $viagem));
        return $result->fetchAll(PDO::FETCH_ASSOC);
    }

    // Consulta uma viagem especifica
    public static function listViagemEspecifica(string $id)
    {
        $conn = new Database();
        $result = $conn->executeQuery("SELECT pe.apelido_pontoEspera, COUNT(pe.apelido_pontoEspera) AS qtn_pontoEspera FROM tb_pontoesperaaluno AS pea JOIN tb_aluno AS a ON pea.idaluno = a.id_aluno
                                        JOIN tb_pontoespera AS pe ON pea.idpontoespera = pe.id_pontoEspera 
                                        JOIN tb_viagem AS v ON v.id_viagem = pea.idviagem
                                        WHERE pea.idviagem = :ID GROUP BY pe.apelido_pontoEspera", array(':ID' => $id));
        return $result->fetchAll(PDO::FETCH_ASSOC);
    }

    // Consulta destino viagem especifica
    public static function listDestinoViagemEspecifica(string $id)
    {
        $conn = new Database();
        $result = $conn->executeQuery("SELECT destino_viagem FROM tb_viagem 
                                        WHERE id_viagem = :ID", array(':ID' => $id));
        return $result->fetchAll(PDO::FETCH_ASSOC);
    }

    // Insere zero no status da viagem (fecha a viagem)
    public static function fecharViagem(string $id)
    {
        $conn = new Database;
        $result = $conn->executeQuery("UPDATE tb_viagem SET status_viagem = '0' WHERE id_viagem = :ID", array(':ID' => $id));
        return $result->fetchAll(PDO::FETCH_ASSOC);
    }

    // Lista os veiculos da empresa
    public static function listVeiculos(string $id)
    {
        $conn = new Database();
        $result = $conn->executeQuery("SELECT * FROM tb_veiculo WHERE empresa_id = :ID", array(':ID' => $id));
        return $result->fetchAll(PDO::FETCH_ASSOC);
    }

    // Lista os motoristas da empresa
    public static function listMotoristas(string $id)
    {
        $conn = new Database();
        $result = $conn->executeQuery("SELECT * FROM tb_motorista WHERE empresa_id = :ID", array(':ID' => $id));
        return $result->fetchAll(PDO::FETCH_ASSOC);
    }

    // Conta os passageiros confirmados
    public static function countPassageiros(string $id)
    {
        $conn = new Database();
        $result = $conn->executeQuery("SELECT COUNT(idaluno) AS qtd FROM tb_pontoesperaaluno WHERE idviagem = :ID", array(':ID' => $id));
        return $result->fetchAll(PDO::FETCH_ASSOC);
    }

    // Conta os assentos disponíveis 
    public static function countAssentos(string $id)
    {
        $conn = new Database();
        $result = $conn->executeQuery("SELECT * FROM tb_veiculosmotoristaviagem AS vm
                                            JOIN tb_veiculo AS v ON vm.id_veiculo = v.id_veiculo
                                            WHERE vm.id_viagem = :ID", array(':ID' => $id));
        return $result->fetchAll(PDO::FETCH_ASSOC);
    }

    // Insere o veiculo e motorista na viagem
    public static function insertVeiculoMotorista(string $id, string $motorista, string $veiculo)
    {
        $conn = new Database();
        $result = $conn->executeQuery("INSERT INTO tb_veiculosmotoristaviagem(id_viagem, id_motorista, id_veiculo) VALUES (:ID, :MOT, :VEIC)",
                                        array(':ID'=> $id, ':MOT' => $motorista, ':VEIC' => $veiculo));
        return $result->fetchAll(PDO::FETCH_ASSOC);
    }

    // Lista os pontos
    public static function listPontos(string $id)
    {
        $conn = new Database();
        $result = $conn->executeQuery("SELECT *, COUNT(pea.idaluno) AS qtd FROM tb_viagem AS v
                                        JOIN tb_pontoesperaaluno AS pea ON pea.idviagem = v.id_viagem
                                        JOIN tb_pontoespera AS pe ON pea.idpontoEspera = pe.id_pontoEspera
                                        WHERE v.id_viagem
                                        GROUP BY pe.id_pontoEspera = :ID", array(':ID' => $id));
        return $result->fetchAll(PDO::FETCH_ASSOC);
    }

    // Lista as infomações da viagem
    public static function listInfo(string $id)
    {
        $conn = new Database();
        $result = $conn->executeQuery("SELECT * FROM tb_veiculosmotoristaviagem AS vmv
                                        JOIN tb_viagem AS v ON vmv.id_viagem = v.id_viagem
                                        JOIN tb_motorista AS m ON vmv.id_motorista = m.id_motorista
                                        JOIN tb_veiculo AS veic ON vmv.id_veiculo = veic.id_veiculo
                                        WHERE v.id_viagem = :ID", array(':ID' => $id));
        return $result->fetchAll(PDO::FETCH_ASSOC);
    }
}

?>