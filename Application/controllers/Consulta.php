<?php

use Application\core\Controller;

class Consulta extends Controller
{
    public function motoristas()
    {
        $this->view('consulta/driver');
    }

    public function pontos()
    {
        $this->view('consulta/point');
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