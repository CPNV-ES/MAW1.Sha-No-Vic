<?php

namespace App\Routing;

class Route
{
    private $controller;
    private $method;
    private $path;
    public function __construct($path, $controller, $method)
    {
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
}
