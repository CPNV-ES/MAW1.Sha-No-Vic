<?php

namespace App\Routing;

class Route
{
    private $routeName;
    private $controller;
    private $method;
    private $path;
    public function __construct($routName, $path, $controller, $method)
    {
        $this->routeName = $routName;
        $this->path = $path;
        $this->controller = "App\\Controllers\\" . $controller;
        $this->method = $method;
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
    public function match()
    {
    }
}
