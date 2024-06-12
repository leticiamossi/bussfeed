<?php

use Application\core\Controller;

class Home extends Controller
{
    public function empresa()
    {
        $this->verification();
        if($this->permission){
            $id = $_SESSION['ID'];
            $conn = $this->model('home');
            $viagens = $conn::listViagens($id);
            $this->view('home/enterprise', ['viagens' => $viagens]);
        } else {
            $this->view('erro404');
        }
    }

    public function passageiro()
    {
        $this->verification();
        if($this->permission){
            $id = $_SESSION['ID_EMP'];
            $conn = $this->model('home');
            $viagens = $conn::listViagens($id);
            $this->view('home/passenger', ['viagens' => $viagens]);
        } else {
            $this->view('erro404');
        }
    }

    public function motorista()
    {
        $this->view('home/driver');
    }
}

?>