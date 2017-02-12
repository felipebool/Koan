<?php

namespace Koan\Component;

class Router
{
    private $routes;
    private $fallback;

    public function __construct()
    {
    }

    public function add($route, $action, $params = null)
    {
        $this->routes[$route] = $action;
    }

    public function getController($route)
    {
        if (isset($this->routes[$route])) {
            return $this->routes[$route]['controller'] . 'Controller';
        }

        if (isset($this->fallback)) {
            return $this->fallback['controller'] . 'Controller';
        }

        throw new \Exception('Missing controller or fallback');
    }

    public function getAction($route)
    {
        if (isset($this->routes[$route])) {
            return $this->routes[$route]['action'] . 'Action';
        }

        if (isset($this->fallback)) {
            return $this->fallback['action'] . 'Action';
        }

        throw new \Exception('Missing action or fallback');
    }

    public function addFallback($action)
    {
        $this->fallback = $route;
    }

    private function getFallbackController()
    {
        return $this->fallback['controller'];
    }

    private function getFallbackAction()
    {
        $return $this->fallback['action'];
    }
}
