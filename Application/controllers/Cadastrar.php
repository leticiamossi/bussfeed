<?php

use Application\core\Controller;

class Cadastrar extends Controller 
{
    public function empresa() {
        $nome = $_POST['nome'];
        $responsavel = $_POST['responsavel'];
        $cnpj = $_POST['cnpj'];
        $email = $_POST['email'];
        $senha = $_POST['senha'];
        $telefone = $_POST['telefone'];
        $token = '435093ut49t4839';

        $conn = $this->model('cadastrar');
        $insert = $conn::insertEmpresa($nome, $responsavel, $cnpj, $email, $senha, $telefone, $token);
        
        if($insert > 0) {
            header('Location: /home/empresa');
        } else {
            $this->view('erro404');
        }
    }
}

?>