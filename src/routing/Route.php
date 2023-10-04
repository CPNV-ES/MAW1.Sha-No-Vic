<?php

namespace App\Routing;

class Route
{
    private $routeName;
    private $controller;
    private $method;
    private $path;
    private $httpMethod;
    public function __construct($routName, $path, $controller, $method, $httpMethod)
    {
        $this->routeName = $routName;
        $this->path = $path;
        $this->controller = "App\\Controllers\\" . $controller;
        $this->method = $method;
        $this->httpMethod = $httpMethod;
    }
    public function getController()
    {
        return $this->controller;
    }
    public function getMethod()
    {
        return $this->method;
    }
    public function getPath()
    {
        return $this->path;
    }
    public function getRouteName()
    {
        return $this->routeName;
    }
    public function getHttpMethod()
    {
        return $this->httpMethod;
    }
    public function match($path)
    {
        if ($this->path == $path && $this->httpMethod == $_SERVER['REQUEST_METHOD']) {
            //check the path to see if there is a parameter
            if (strpos($path, ':') !== false) {
                //if there is a parameter, we need to check if the parameter is an id
                $pathArray = explode('/', $path);
                $routeArray = explode('/', $this->path);
                //check if the parameter is an id
                foreach ($routeArray as $key => $value) {
                    if (strpos($value, ':') !== false) {
                        //if the parameter is an id, we need to check if the id is an integer
                        if (is_numeric($pathArray[$key])) {
                            //if the id is an integer, we can return true
                            return true;
                        }
                    }
                }
                //if the parameter is not an id, we can return true
                return true;
            }
            return true;
        }
        return false;
    }
}
