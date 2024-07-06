<?php
// Arquivo responsável por controlar as informações referente a viagem

use Application\core\Controller;

class Viagem extends Controller
{
    // Encaminha para a pagina de criar a viagem
    public function criar()
    {
        $this->verification();
        if($this->permission && $_SESSION['nivel'] == '1'){
            $this->view('viagem/criar');
        }
    }

    // Cria a viagem 
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

    // Encaminha as informações referente a viagem para a página de fechar a viagem  
    public function empresa($id)
    {
        $this->verification();
        if($this->permission){
            $conn = $this->model('viagem');
            $pontos = $conn::listViagemEspecifica($id);
            $destino = $conn::listDestinoViagemEspecifica($id);
            $this->view('viagem/enterprise', ['id' => $id, 'pontos' => $pontos, 'destino' => $destino]);
        } else {
            $this->view('erro404');
        }
    }

    // Página de escolha de veiculo e motorista
    public function confirmacao($id)
    {
        $this->verification();
        if($this->permission){
            $conn = $this->model('viagem');
            $update = $conn::fecharViagem($id);
            $veiculos = $conn::listVeiculos($_SESSION['ID']);
            $motorista = $conn::listMotoristas($_SESSION['ID']);

            //Lista os veiculos e motoristas disponiveis
            if(isset($_POST['veiculo'])){
                $veic = $_POST['veiculo'];
                $mot = $_POST['motorista'];

                $insert = $conn::insertVeiculoMotorista($id, $mot, $veic);
            }

            // Conta quatos passageiro confirmaram a viagem
            $qtdPass = $conn::countPassageiros($id);
            $passageiros = 0;
            foreach($qtdPass as $passageiro) {
                $passageiros = $passageiros + $passageiro['qtd'];
            }

            // Conta quantos assentos tem disponivel
            $veiculosViagem = $conn::countAssentos($id);
            $lugares = 0;
            foreach($veiculosViagem as $veiculo) {
                $lugares = $lugares + $veiculo['qtdLugares_veiculo'];
            }

           // Caso ainda haja passageiros sem assentos, retorna para esta página para escolher mais um veiculo 
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

    // Lista os pontos necessários para o dia
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

    // Página para o passageiro escolher o seu ponto
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