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