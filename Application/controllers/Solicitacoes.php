<?php
// Arquivo responsável por controlar a página de solicitacoes 

use Application\core\Controller;

class Solicitacoes extends Controller
{
    // Consulta pedidos não respondidos
    public function index()
    {
        $this->verification();
        if($this->permission){
            $id = $_SESSION['ID'];
            $conn = $this->model('solicitacoes');
            $solicitacoes = $conn::listSolicitacoes($id);
            $this->view('solicitacoes/index', ['solicitacoes' => $solicitacoes]);
        } else {
            $this->view('erro404');
        }
    }

    // Chama o insert da resposta
    public function resposta($id, $resposta)
    {
        $this->verification();
        if($this->permission){
            $conn = $this->model('solicitacoes');
            $insert = $conn::insertResposta($id, $resposta);
            header('Location: /solicitacoes');
        } else {
            $this->view('erro404');
        }
    }
}

?>