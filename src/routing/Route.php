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
        //TODO: ajouter un match sur plusieur methode http par route en mettant la posibilité de mettre une methdoe en post et get par exemple
        $path = $this->routeTemplateFromURL($path);

        if ($this->path == $path && $this->httpMethod == $_SERVER['REQUEST_METHOD']) {
            return true;
        }
        return false;
    }
    public function routeTemplateFromURL($url)
    {
        $url = explode('/', $url);
        foreach ($url as $key => $value) {
            if (is_numeric($value)) {
                $url[$key] = ':id';
            }
        }
        return implode('/', $url);
    }
}
