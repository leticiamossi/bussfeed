<?php

namespace Application\models;

use Application\core\Database;
use PDO;

class Login 
{
    public static function findUser(string $user, string $senha)
    {
        $conn = new Database();
        $result = $conn->executeQuery('SELECT * FROM tb_usuario WHERE user_user = :USER AND senha_user = sha1(:PASS)', array(':USER' => $user, ':PASS' => $senha));
        return $result->fetchAll(PDO::FETCH_ASSOC);
    }
}

?>