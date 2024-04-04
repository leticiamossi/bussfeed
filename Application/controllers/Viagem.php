<?php

use Application\core\Controller;
use Application\core\Database;

class Viagem extends Controller
{
    public function ponto()
    {
        $this->view('viagem/point');
    }

    public function empresa()
    {
        $this->view('viagem/enterprise');
    }

    public function motorista()
    {
        $this->view('viagem/driver');
    }

    public function passageiro()
    {
        $this->view('viagem/passenger');
    }
}

?>