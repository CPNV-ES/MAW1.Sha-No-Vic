<?php

namespace App\Routing;

use App\Routing\Route;

class Router
{
    private $routes = [];
    public function __construct()
    {
        $this->setRoutes();
    }
    public function setRoutes()
    {
        $routes = include('routeConfig.php');
        foreach ($routes as $route => $param) {
            $this->routes[] = new Route($param['path'], $param['controller'], $param['method']);
        }
    }
    //function to redirect to the right controller
    public function redirect($path)
    {
        foreach ($this->routes as $route) {
            if ($route->getPath() == $path) {
                $controllerName = $route->getController();
                $method = $route->getMethod();

                // Check if the controller class exists
                if (class_exists($controllerName)) {
                    $controller = new $controllerName();

                    // Check if the method exists within the controller class
                    if (method_exists($controller, $method)) {
                        $controller->$method();
                    } else {
                        // Handle method not found error
                        echo "Method not found in controller: $method";
                    }
                } else {
                    // Handle controller not found error
                    echo "Controller not found: $controllerName";
                }
            }
        }
    }
}
