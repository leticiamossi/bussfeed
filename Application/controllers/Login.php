<?php

use Application\core\Controller;

class Login extends Controller
{
    //chama a view index.php do /login 
    public function index()
    {
        $this->view('login/index');
    }

    public function login()
    {
        $email = $_POST['email'];
        $senha = $_POST['senha'];

        $conn = $this->model('login');
        $data = $conn->findNivelUser($email, $senha);

        if(!empty($data))
        {
            session_start();
            foreach($data as $user){
                $_SESSION['nivel'] = $user['nivel_usuario'];
            }
            
            switch($_SESSION['nivel'])
            {
                case 1:
                    $empresa = $conn::findEmpresa($email, $senha);
                    foreach($empresa as $aux){
                        $_SESSION['ID'] = $aux['id_empresa'];
                        $_SESSION['TOKEN'] = $aux['token_empresa'];
                        $_SESSION['EMP'] = $aux['nome_empresa'];
                    }
                    header("Location: /home/empresa");
                    break;
                case 2:
                    $passageiro = $conn::findPassageiro($email, $senha);
                    $empresa = $conn::findEmpresaPassageiro($email, $senha);
                    foreach($passageiro as $aux){
                        $_SESSION['ID'] = $aux['id_aluno'];
                        $_SESSION['NOME'] = $aux['nome_aluno'];
                    }
                    foreach($empresa as $auxi){
                        $_SESSION['ID_EMP'] = $auxi['empresa_id'];
                    }
                    header("Location: /home/passageiro");
                    break;
                case 3:
                    $motorista = $conn::findMotorista($email, $senha);
                    foreach($motorista as $aux){
                        $_SESSION['ID'] = $aux['id_motorista'];
                        $_SESSION['NOME'] = $aux['nome_motorista'];
                    }
                    header("Location: /home/motorista");
                    break;
            }
        } else {
            $this->view('erro404');
        }

    }

    public function logout()
    {
        $this->verification();
        if($this->permission){
            session_destroy();
            $this->permission = false;
            echo "<script>window.location.href = '/login';</script>";
        }
        $this->view('login/index');
    }
}

?>