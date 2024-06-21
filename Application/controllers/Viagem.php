<?php

use Application\core\Controller;
use Application\core\Database;

class Viagem extends Controller
{
    public function criar()
    {
        $this->verification();
        if($this->permission && $_SESSION['nivel'] == '1'){
            $this->view('viagem/criar');
        }
    }

    public function criada()
    {
        $this->verification();
        if($this->permission && $_SESSION['nivel'] == '1'){
            $destino = $_POST['destino'];
            $data = $_POST['data'];
            $id = $_SESSION['ID'];

            $conn = $this->model('viagem');
            $insert = $conn::insertCriacaoViagem($destino, $data, $id);
            
            header('Location: /home/empresa');
        }
    }

    public function ponto()
    {
        $this->view('viagem/point');
    }

    public function empresa($id)
    {
        $this->verification();
        if($this->permission){
            $conn = $this->model('viagem');
            $pontos = $conn::listViagemEspecifica($id);
            $this->view('viagem/enterprise', ['id' => $id, 'pontos' => $pontos]);
        } else {
            $this->view('erro404');
        }
    }

    public function confirmacao($id)
    {
        $this->verification();
        if($this->permission){
            $conn = $this->model('viagem');
            $update = $conn::fecharViagem($id);
            $veiculos = $conn::listVeiculos($_SESSION['ID']);
            $motorista = $conn::listMotoristas($_SESSION['ID']);

            if(isset($_POST['veiculo'])){
                $veic = $_POST['veiculo'];
                $mot = $_POST['motorista'];

                $insert = $conn::insertVeiculoMotorista($id, $mot, $veic);
            }

            $qtdPass = $conn::countPassageiros($id);
            $passageiros = 0;
            foreach($qtdPass as $passageiro) {
                $passageiros = $passageiros + $passageiro['qtd'];
            }

            $veiculosViagem = $conn::countAssentos($id);
            $lugares = 0;
            foreach($veiculosViagem as $veiculo) {
                $lugares = $lugares + $veiculo['qtdLugares_veiculo'];
            }

            $passageiros = $passageiros - $lugares;
            if($passageiros <= 0){
                header('Location: /home/empresa');
            } else {
                $this->view('viagem/confirm', ['id' => $id, 'veiculos' => $veiculos, 'motoristas' => $motorista, 'passageiros' => $passageiros, 'veiculosViagem' => $veiculosViagem]);
            }

        } else {
            $this->view('erro404');
        }
    }

    public function pontos($id)
    {
        $this->verification();
        if($this->permission){
            $conn = $this->model('viagem');
            $info = $conn::listInfo($id);
            $pontos = $conn::listPontos($id);
            $this->view('viagem/points', ['id' => $id, 'pontos' => $pontos, 'info' => $info]);
        } else {
            $this->view('erro404');
        }
    }

    public function passageiro($id)
    {
        $this->verification();
        if($this->permission){
            $conn = $this->model('consulta');
            $pontos = $conn::listPontos($_SESSION['ID_EMP']);
            $this->view('viagem/passenger', ['id' => $id, 'pontos' => $pontos]);
        } else {
            $this->view('erro404');
        }
    }
}

?>