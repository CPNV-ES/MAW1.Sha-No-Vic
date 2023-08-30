<?php 
class Router{
    private $routes = [];
    private $url;

    public function __construct($url){
        $this->url = $url;
    }
    public function setRoutes(){
        $routes = include('../routeConfig.php');
        foreach ($routes as $route => $param){
            $this->routes[] = new Route($param['path'], $param['controller'], $param['method']);   
        }
        $this->routes = $routes;
    }
}