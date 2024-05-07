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

    public function motorista() {
        $id = $_SESSION['ID'];
        $nome = $_POST['nome'];
        $cpf = $_POST['cpf'];
        $telefone = $_POST['telefone'];
        $cnh = $_POST['cnh'];
        $catCnh = $_POST['cat-cnh'];
        $categorias = '';
        $email = $_POST['email'];
        $senha = $_POST['senha'];

        foreach($catCnh as $cat) {
            if($cat == 'cat-a'){
                $categorias = $categorias.'A ';
             }
             if($cat == 'cat-b'){
                $categorias = $categorias.'B ';
             }
             if($cat == 'cat-c'){
                $categorias = $categorias.'C ';
             }
             if($cat == 'cat-d'){
                $categorias = $categorias.'D ';
             }
             if($cat == 'cat-e'){
                $categorias = $categorias.'E ';
             }
        }

        $conn = $this->model('cadastrar');
        $insert = $conn::insertMotorista($id, $nome, $email, $senha, $cpf, $cnh, $categorias, $telefone);

        if($insert > 0) {
            header('Location: /consulta/driver');
        } else {
            $this->view('erro404');
        }
    }
}

?>