<?php

use Application\core\Controller;

class Home extends Controller
{
    public function empresa()
    {
        $this->verification();
        if($this->permission){
            $this->view('home/enterprise');
        } else {
            $this->view('erro404');
        }
    }

    public function passageiro()
    {
        $this->verification();
        if($this->permission){
            $this->view('home/passenger');
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