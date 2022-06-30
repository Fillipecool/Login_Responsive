<?php

class Core{
    private $url;
    private $controller;
    private $method;
    private $params = array();


    public function _construct()
    {

    }
    public function start($request)
    {
        if ($request['url']){
        $this->url = explode('/', $request['url']);

        $this->controller = ucfirst($this->url[0]).'controller';
        array_shift($this->url);

        $this->method = $this->url[0];
        array_shift($this->url);

        $this->params = $this->url;
        } else{
            $this->controller = 'LoginController';
            $this->method = 'index';
        }

        echo call_user_func(array(new $this->controller, $this->method), $this->params);
        var_dump($this->controller, $this->method, $this->params);
    }
}