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
}

?>