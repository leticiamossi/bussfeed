<?php
// Arquivo responsável por chamar os select no model consulta.php e enviar as informações para a página
use Application\core\Controller;

class Consulta extends Controller
{
    // Consulta os motoristas
    public function motoristas()
    {
        $this->verification();
        if($this->permission){
            $id = $_SESSION['ID'];
            $conn = $this->model('consulta');
            $data = $conn::listMotoristas($id);
            $this->view('consulta/driver', ['motoristas' => $data]);
        }
    }

    // Consulta os pontos
    public function ponto()
    {
        $this->verification();
        if($this->permission){
            $id = $_SESSION['ID'];
            $conn = $this->model('consulta');
            $data = $conn::listPontos($id);
            $this->view('consulta/point', ['pontos' => $data]);
        }
    }

    // Consulta os veiculos
    public function veiculos()
    {
        $this->verification();
        if($this->permission){
            $id = $_SESSION['ID'];
            $conn = $this->model('consulta');
            $data = $conn::listVeiculos($id);
            $this->view('consulta/vehicle', ['veiculos' => $data]);
        }
    }

    // Consulta as viagens realizadas pela empresa
    public function viagemEmpresa()
    {
        $this->verification();
        if($this->permission){
            $id = $_SESSION['ID'];
            $conn = $this->model('consulta');
            $data = $conn::listViagemEmp($id);
            $this->view('consulta/viagemempresa', ['viagens' => $data]);
        }
    }

    // Consulta as viagens realizadas pelo passageiro
    public function viagemPassageiro()
    {
        $this->verification();
        if($this->permission){
            $id = $_SESSION['ID'];
            $conn = $this->model('consulta');
            $data = $conn::listViagemPas($id);
            $this->view('consulta/viagempassageiro', ['viagens' => $data]);
        }
    }

    // Consulta as viagens realizadas pelo motorista
    public function viagemMotorista()
    {
        $this->verification();
        if($this->permission){
            $id = $_SESSION['ID'];
            $conn = $this->model('consulta');
            $data = $conn::listViagemPas($id);
            $this->view('consulta/viagemmotorista', ['viagens' => $data]);
        }
    }
}

?>