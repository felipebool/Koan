<?php

namespace Koan\Http;

class Request
{
    private $request;
    private $get;
    private $params;

    public function __construct()
    {
        $this->get = $_GET;
        //$this->route = explode('/', trim($_GET['route'], '/'));
        $this->route = trim($_GET['route'], '/');
        //$this->params = array_diff($_GET, $this->route);
    }

    public function getRoute()
    {
        return $this->route;
    }
}
