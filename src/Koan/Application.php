<?php

namespace Koan;

use Koan\Http\Response;
use Koan\Core\ClassLoader;

class Application
{
    private $di;

    public function __construct($di)
    {
        $this->di = $di;
    }

    public function run()
    {
        $request = $this->di->Request;
        $route = $request->getRoute();

        $router = $this->di->Router;
        $controller = $router->getController($route);
        $action = $router->getAction($route);

        $loader = new ClassLoader();
        if ($loader->loadClass($controller)) {
            $obj = new $controller;
            return new Response($obj->$action());
        }
    }
}
