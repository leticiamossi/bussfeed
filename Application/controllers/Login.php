<?php

use Application\core\Controller;

class Login extends Controller
{
    //chama a view index.php do /login 
    public function index()
    {
        $this->view('login/index');
    }
}

?>