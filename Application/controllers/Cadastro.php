<?php

use Application\core\Controller;

class Cadastro extends Controller
{
    public function type()
    {
        $this->view('cadastro/type');
    }

    public function empresa()
    {
        $this->view('cadastro/enterprise');
    }

    public function motorista()
    {
        $this->view('cadastro/driver');
    }

    public function ponto()
    {
        $this->view('cadastro/point');
    }

    public function veiculo()
    {
        $this->view('cadastro/vehicle');
    }

    public function passageiro()
    {
        $this->view('cadastro/passenger');
    }

    public function infoPassageiro()
    {
        $this->view('cadastro/passenger-enterprise');
    }
}

?>