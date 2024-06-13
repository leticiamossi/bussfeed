<?php

use Application\core\Controller;

class Consulta extends Controller
{
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

    public function viagemEmpresa()
    {
        $this->view('consulta/travel-enterprise');
    }

    public function viagemPassageiro()
    {
        $this->view('consulta/travel-passenger');
    }

    public function viagemMotorista()
    {
        $this->view('consulta/travel-driver');
    }
}

?>