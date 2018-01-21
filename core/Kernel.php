<?php

class Kernel
{
    protected $routes = [
        'GET' => [],
        'POST' => []
    ];

    public static function init($fileName='router')
    {
        $routes = new self;
        require "{$fileName}.php";

        return $routes;
    }

    public function run()
    {
        $url = Request::getUri();
        $method = Request::method();
        if(array_key_exists($url, $this->routes[$method])){
            $url = explode('@', $this->routes[$method][$url]);
            $this->callController(...$url);

            return true;
        }

        throw new Exception('Page not Found', 404);
    }

    protected function callController($class, $method, $args=[])
    {
        $class = new $class();
        call_user_func_array([$class, $method], $args);
    }


    /**
     * @param array $routes
     */
    public function setRoutes($routes)
    {
        $this->routes = $routes;
    }

    public function get($url, $controller)
    {
        $this->routes['GET'][$url] = $controller;
    }

    public function post($url, $controller)
    {
        $this->routes['POST'][$url] = $controller;
    }
}