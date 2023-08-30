<?php
class Route{
    private $controller;
    private $method;
    private $path;
    private $params = [];

    public function __construct($path, $controller, $method){
        $this->path = $path;
        $this->controller = '../controllers/' . $controller . '.php';
        $this->method = $method;
        $this->params = [];        
    }
    public function matchUrl($url){
        $url = trim($url, '/');
        $path = trim($this->path, '/');
        $path = preg_replace('/{([a-z]+)}/', '([a-z0-9-]+)', $path);
        $regex = "/^$path$/i";
        if(preg_match($regex, $url, $matches)){
            array_shift($matches);
            $this->params = $matches;
            return true;
        }
        return false;
    }
    public function call(){
        if(file_exists($this->controller)){
            require_once($this->controller);
            $controller = new $this->controller();
            if(method_exists($controller, $this->method)){
                call_user_func_array([$controller, $this->method], $this->params);
            }else{
                echo "Method $this->method does not exist in $this->controller";
            }
        }else{
            echo "Controller $this->controller does not exist";
        }
    }


}