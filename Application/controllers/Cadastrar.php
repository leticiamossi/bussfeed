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

    public function passageiro() {
        $nome = $_POST['nome'];
        $cpf = $_POST['cpf'];
        $telefone = $_POST['telefone'];
        $email = $_POST['email'];
        $senha = $_POST['senha'];
        $rua = $_POST['rua'];
        $numero = $_POST['numero'];
        $bairro = $_POST['bairro'];
        $cidade = $_POST['cidade'];
        $estado = $_POST['estado'];
        $cep = $_POST['cep'];
        $instituicao = $_POST['instituicao'];
        $ingresso = $_POST['ingresso'];
        $ano = $ingresso.'-01';
        $codigo = $_POST['codigo'];

        $conn = $this->model('cadastrar');
        $insert = $conn::insertPassageiro($nome, $cpf, $telefone, $email, $senha, $instituicao, $ano);
        foreach($insert as $id){
            $idAluno = $id['id_aluno'];
        }
        $insertEnd = $conn::insertEndereco($rua, $numero, $bairro, $cidade, $estado, $cep, $idAluno);

        $solicitacao = date('Y-m-d');
        if(date('m') >= 6){
            $expiracao = date('Y')."-12-31";
        } else {
            $expiracao = date('Y')."-07-31";
        }
        $insertSolicitacao = $conn::insertSolicitacao($codigo, $idAluno, $solicitacao, $expiracao);
    }
}

?>