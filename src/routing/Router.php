<?php

namespace App\Routing;

use App\Routing\Route;
use App\Services;
use App\Services\RouteParameterHandler;

class Router
{
    private $routes = [];
    public function __construct()
    {
        $this->setRoutes();
    }
    private function setRoutes()
    {
        $routes = include('routeConfig.php');

        foreach ($routes as $route => $param) {
            $this->routes[] = new Route($route, $param['path'], $param['controller'], $param['method'], $param['httpMethod']);
        }
    }
    public function getRoutes()
    {
        return $this->routes;
    }
    //function to redirect to the right controller
    public function redirectByPath($path)
    {
        $params = RouteParameterHandler::extractIdFromURL($path);
        $this->redirect($this->getRouteByPath($path), $params);
    }
    //TODO: check if the route exists before redirecting(same on name and path)
    public function getRouteByPath($path)
    {
        foreach ($this->routes as $route) {
            if ($route->match($path)) {
                return $route;
            }
        }
    }
    public function redirect(Route $route, $params = [])
    {
        $controllerName = $route->getController();
        $method = $route->getMethod();
        // Check if the controller class exists
        if (class_exists($controllerName)) {
            $controller = new $controllerName();

            // Check if the method exists within the controller class
            if (method_exists($controller, $method)) {
                $controller->$method($params);
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
