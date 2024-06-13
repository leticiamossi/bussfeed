<?php

use Application\core\Controller;

class Consulta extends Controller
{
    public function motoristas()
    {
        $this->view('consulta/driver');
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
        $this->view('consulta/vehicle');
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