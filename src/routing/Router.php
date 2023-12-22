<?php

namespace App\Routing;

use App\Routing\Route;
use App\Services;
use App\Services\Renderer;
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
        //TODO: passer par la fonction dans route
        $params['id'] = $this->extractIdFromURL($path);
        try {
            $this->redirect($this->getRouteByPath($path), $params);
        } catch (\Throwable $th) {
            http_response_code(404);
            Renderer::displayError("The route $path does not exist");
        }

    }
    public function getRouteByPath($path)
    {
        foreach ($this->routes as $route) {
            if ($route->match($path)) {
                return $route;
            }
        }
    }
    //TODO: refactor error handler
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
                http_response_code(500);
                Renderer::displayError("The method $method does not exist in the controller $controllerName");
            }
        } else {
            http_response_code(500);
            Renderer::displayError("The controller $controllerName does not exist");
        }
    }

    private function extractIdFromURL($url)
    {
        $url = explode('/', $url);
        $ids = [];
        foreach ($url as $key => $value) {
            if (is_numeric($value)) {
                $ids[] = $value;
            }
        }
        return $ids;
    }

}
