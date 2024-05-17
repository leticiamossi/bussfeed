<?php

namespace Application\core;

// Classe responsável por obter da URL o controller, método e os parâmetros. E verificar a existência

class App 
{
    protected $controller = 'Login';
    protected $method = 'index';
    protected $page404 = false;
    protected $params = [];

    //Construtor
    public function __construct()
    {
        $URL_ARRAY = $this->parseURL();
        $this->getControllerFromUrl($URL_ARRAY);
        $this->getMethodFromUrl($URL_ARRAY);
        $this->getParamsFromUrl($URL_ARRAY);
        //chama um método da classe passando os parâmetros
        call_user_func_array([$this->controller, $this->method], $this->params);
    }

    //Pega as informações da URL (após o domínio do site) e retorna os dados
    private function parseURL()
    {
        $REQUEST_URI = substr($_SERVER["REQUEST_URI"], strpos($_SERVER["REQUEST_URI"], '/')+1);
        $REQUEST_URI = explode('/', substr($_SERVER["REQUEST_URI"], strpos($_SERVER["REQUEST_URI"], '/')+1));
        
        return $REQUEST_URI;
    }

    //Verifica se possui informações na posição 0 (controlador), caso exista, verfica se tem um arquivo com esse nome no diretório controllers e instancia um objeto do arquivo, caso contrário a variável $page404 recebe true
    private function getControllerFromUrl($url)
    {
        if(!empty($url[0]) && isset($url[0])) {
            if(file_exists('./Application/controllers/'.ucfirst($url[0]).'.php')) {
                $this->controller = ucfirst($url[0]);
            } else {
                $this->page404 = true;
            }
        }
        $control = $this->controller.".php";
        require "./Application/controllers/" . $control;
        $this->controller = new $this->controller();
    }

    //Verifica se possui informações na posição 1 (método), caso exista, verfica se tem o método no controlador e atribui a variável $method da classe
    private function getMethodFromUrl($url)
    {
        if(!empty($url[1]) && isset($url[1])) {
            if(method_exists($this->controller, $url[1]) && !$this->page404) {
                $this->method = $url[1];
            } else {
                //caso a classe ou o método não existam, o método pageNotFound do controller é chamado
                $this->method = 'pageNotFound';
            }
        }
    }

    //Verifica se o array informado possui a quantidade de elemntos maior que 2 (url[0] é o controller e url[1] é o método/ação), caso seja, é atribuido a variável $params da classe um novo arrau a partir da posição 2 do array url
    private function getParamsFromUrl($url)
    {
        if(count($url) > 2){
            $this->params = array_slice($url, 2);
        }
    }
}

?>