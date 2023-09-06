<?php 
namespace App\Routing;
class Router{
    private $routes = [];
    public function __construct(){
        $this->setRoutes();
    }
    public function setRoutes(){
        $routes = include('../routeConfig.php');
        foreach ($routes as $route => $param){
            $this->routes[] = new Route($param['path'], $param['controller'], $param['method']);   
        }
        $this->routes = $routes;
    }
    //function to redirect to the right controller
    public function redirect($path){
        foreach ($this->routes as $route){
            if($route->getPath() == $path){
                $controller = $route->getController();
                $method = $route->getMethod();
                $controller->$method();
            }
        }
    }
}