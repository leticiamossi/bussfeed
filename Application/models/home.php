<?php

namespace Application\models;

use Application\core\Database;
use PDO;

class Home 
{
    public static function listViagens(string $idEmpresa)
    {
        $conn = new Database();
        $result = $conn->executeQuery("SELECT * FROM tb_viagem WHERE dataViagem_viagem = CURDATE() && empresa_id = :ID", array(':ID' => $idEmpresa));
        return $result->fetchAll(PDO::FETCH_ASSOC);
    }
}

?>