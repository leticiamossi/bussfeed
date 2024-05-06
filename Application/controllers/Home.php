<?php

use Application\core\Controller;

class Home extends Controller
{
    public function index() {
        $this->view('home/index');
    }
    
    public function empresa()
    {
        $this->view('home/enterprise');
    }

    public function passageiro()
    {
        $this->view('home/passenger');
    }

    public function motorista()
    {
        $this->view('home/driver');
    }
}

?>