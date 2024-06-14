<?php

use Application\core\Controller;

class Confirmar extends Controller
{
    public function passageiro($id)
    {
        $this->verification();
        if($this->permission){
            $ponto = $_POST['ponto'];
            echo $ponto;
            $conn = $this->model('viagem');
            $insert = $conn::confirmarViagem($id, $_SESSION['ID'], $ponto);
            header('Location: /home/passageiro');
        } else {
            $this->view('erro404');
        }
        
    }
}

?>