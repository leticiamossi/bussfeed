<?php

namespace Application\core;

use Application\models\Users;

//instancia um model e chama a view correta passando os dados que serão usados
class Controller 
{
    //Atributo para ver se o usuário tem permissão para entrar
    protected $permission = false;

    //instancia o model
    //$model É o model que será instanciado para usar em uma view
    public function model($model) 
    {
        require './Application/models/'.$model.'.php';
        $classe = 'Application\\models\\'.$model;
        return new $classe();
    }

    //chama uma deteminada view
    // $view   A view que será chamada ou requerida
    // $data   São os dados que serão exibido na view
    public function view(string $view, $data = [])
    {
        $vw = $view . ".php";
        require './Application/views/'.$view.'.php';
    }

    //esse método é herdado para todas as classes filhas quando o método ou classe informado pelo usuário não for encontrado
    public function pageNotFound()
    {
        $this->view('erro404');
    }

    //esse método verifica se o usuário está cadastrado na sessão
    public function verification() 
    {
        if(!isset($_SESSION)) session_start();

        //verifica se não há variavel da sessao que identifica o usuario
        if(!isset($_SESSION['ID'])) {
            //Destroi a sessao 
            session_destroy();
            $this->pageNotFound();
        } else {
            return $this->permission = true;
        }
    }
}

?>