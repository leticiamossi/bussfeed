<?php

use Application\core\Controller;

class Home extends Controller
{
    //chama a view index.php do /home ou somente /
    public function index()
    {
        $this->view('home/index');
    }

    //chama a view index.php do /home ou somente /
    public function logout()
    {
        $this->verification();
        if($this->permission){
            session_destroy();
            $this->permission = false;
            echo "<script>window.location.href = '/home';</script>";
        }
        $this->view('home/index');
    }


}

?>