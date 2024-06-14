<?php

namespace Application\models;

use Application\core\Database;
use PDO;

class Viagem
{
    public static function insertCriacaoViagem(string $destino, string $data, string $id)
    {
        $conn = new Database();
        $result = $conn->executeQuery("INSERT INTO tb_viagem(destino_viagem, dataViagem_viagem, empresa_id) VALUES (:DEST, :DAT, :ID)",
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
}

?>